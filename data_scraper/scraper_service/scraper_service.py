# -*- coding: utf-8 -*-
from time import sleep

import requests
from bs4 import BeautifulSoup

from json_service.json_service import *

TIMEOUT_SEC = 5



def fetch_categories(json_data: dict, file_path) -> None:
    try:
        response = requests.get(f"{BASE_URL}/pl/c/")
        soup = BeautifulSoup(response.text, "html.parser")
        main_div = soup.find("div", {"id": "box_menu"})
        list_div = main_div.find("ul", {"class": "standard"})
        for category in list_div.find_all("li"):
            category_name = category.find("a").get_text(strip=True)
            category_url = category.find("a")["href"]
            category_url = f"{BASE_URL}{category_url}"
            if category_name in json_data:
                print(f"Category {category_name} already fetched")
                continue
            json_data[category_name] = {"url": category_url, "sub_categories": {}}
            append_to_json(json_data, file_path)

            sleep(1)
    except Exception as e:
        print(f"Error while fetching categories: {e}")


def fetch_subcategories(json_data: dict, file_path) -> None:
    for category_name, category_data in json_data.items():
        try:
            response = requests.get(category_data["url"], timeout=5)
            soup = BeautifulSoup(response.text, "html.parser")
            list_element = soup.find("li", {"class": "current"})

            for sub_category in list_element.find_all("li"):
                sub_category_name = sub_category.find("a").get_text(strip=True)
                sub_category_url = sub_category.find("a")["href"]
                sub_category_url = f"{BASE_URL}{sub_category_url}"
                if sub_category_name in json_data[category_name]["sub_categories"]:
                    print(f"Subcategory {category_name}/{sub_category_name} already fetched")
                    continue
                json_data[category_name]["sub_categories"][sub_category_name] = {"url": sub_category_url}
                append_to_json(json_data, file_path)
                sleep(1)
        except Exception as e:
            print(f"Error while fetching subcategories for {category_data['url']}: {e}")


def fetch_product_details(product_url):
    status_code = 404
    no_of_product_retries = 0
    
    while no_of_product_retries < 10:
        try:
            response = requests.get(f"https://motkomania.pl{product_url}", timeout=TIMEOUT_SEC)
            status_code = response.status_code
            
            if status_code == 200:
                break
            if status_code == 404:
                print(f"Product page not found - skipping...")
                break
        except Exception as e:
            print(f"Error while fetching product page : {e} - retrying....")
            no_of_product_retries += 1
    
    if no_of_product_retries >= 10:
        print(f"Product page connection retries exceeded - skipping...")
        return
    
    
    product = BeautifulSoup(response.text, "html.parser")
    
    
    description = product.find('div', class_='resetcss').find('span')
    if description is None:
        description = product.find('div', class_='resetcss').find('p')
        
    description = description.get_text(strip=True)

    product_json_data = {
        "category": None,
        "sub_category": None,
        "price": None,
        "img": None,
        "description": description
    }
    
    
    # additional images
    product_imgs_gallery = product.find('div', class_='innersmallgallery')
    if product_imgs_gallery:
        product_imgs = product_imgs_gallery.find_all('a')
        for i, img in enumerate(product_imgs, start=1):
            product_json_data.update({f"product_img{i}": img['href']})
    else: #if product has no gallery, add single image
        single_image = product.find('a', class_='js__gallery-anchor-image')
        product_json_data.update({"product_img1": single_image['href']})
    
    # producent = product.find('div', class_='row manufacturer')
    # if producent:
    #     producent_link = producent.find('a')['href']
    #     producent_img = producent.find('img')['src']
    #     product_json_data.update({"producent_img": producent_img, "producent_link": producent_link})

    

    table = product.find('div', class_='innerbox tab-content product-attributes zebra')
    
    if table is None:
        return product_json_data
    
    technical_label = table.find_all('td', class_='name r--l-box-5 r--l-md-box-10 r--l-xs-box-10')
    technical_data = table.find_all('td', class_='value r--l-box-5 r--l-md-box-10 r--l-xs-box-10')
    for (data, label) in zip(technical_data, technical_label):
        product_json_data.update({label.get_text(strip=True): data.get_text(strip=True)})
        
    return product_json_data


def fetch_products_in_category(products_json_data: dict, sub_category_url, sub_category_name, category_name, no_pages):
    fetched_category_products = 0
    
    for page in range(int(no_pages)):
        print(f"Fetching products at page {page+1}/{no_pages}")
        
        status_code = 404
        no_of_page_retries = 0
        
        while no_of_page_retries < 10:
            try:
                response = requests.get(f"{sub_category_url}/{page+1}", timeout=TIMEOUT_SEC)
                status_code = response.status_code
                
                if status_code == 200:
                    break
                if status_code == 404:
                    print(f"Page {page+1} not found - skipping...")
                    break
            except Exception as e:
                print(f"Error while fetching page - {page+1} : {e} - retrying....")
                no_of_page_retries += 1
        
        if no_of_page_retries >= 10:
            print(f"Page {page+1} connection retries exceeded - skipping...")
            continue
                
        soup = BeautifulSoup(response.text, "html.parser")
        main_div = soup.find("div", {"class": "products products_extended viewphot s-row"})
        
        for product in main_div.find_all("div", {"class": "product-inner-wrap"}):
            if fetched_category_products >= 500:
                print("Fetched 500 products - stopping for this sub-category")
                return
            try:
                # product name
                
                product_name = product.find("a", {"class": "prodname f-row"})
                name = product_name.get_text(strip=True)
                print(name)
                
                # if product is already fetched - skip (we have full details for each product already)
                if name in products_json_data:
                    print(f"Product {name} already fetched")
                    continue
                # product price
                product_basket = product.find("div", {"class": "product__basket"})
                product_price = product_basket.find("div", {"class": "price f-row"})
                price = product_price.get_text(strip=True)
                price = price[5:10].replace(' ', '').replace(',', '.')
                
                # product image
                product_img = product.find('img')
                source = 'https://motkomania.pl{}'.format(product_img['data-src'])
            
                product_url = product.find('a', class_='prodimage f-row')['href']
                product_json_data = fetch_product_details(product_url)
                
                product_json_data['category'] = category_name
                product_json_data['sub_category'] = sub_category_name
                product_json_data['price'] = price
                product_json_data['img'] = source
                
                if None in product_json_data.values() or name is None:
                    print(f"Error while fetching product at page - {page+1} - skipping...")
                    continue

                products_json_data[name] = product_json_data
                append_to_json(products_json_data, PRODUCTS_FILEPATH)
                fetched_category_products +=1
            except Exception as e:
                print(f"Error while fetching product at page - {page+1} : {e} - skipping...")
                continue


def fetch_all_products(products_json_data: dict, categories_json_data: dict) -> None:
    for category_name, sub_categories in CATEGORIES_TO_FETCH.items():
        for sub_category_name in sub_categories:
            sub_category_url = categories_json_data.get(category_name).get("sub_categories").get(sub_category_name).get("url")
            
            # assumption for the loop to work
            status_code = 404
            
            while status_code != 200:
                try:
                    response = requests.get(sub_category_url, timeout=TIMEOUT_SEC)
                    status_code = response.status_code
                except Exception as e:
                    print(f"Error while fetching: {category_name} : {sub_category_name} : {e} - retrying....")
                    
                    
            print(f"Started fetching for: {category_name} : {sub_category_name} (Response code: {response.status_code})")
            
            soup = BeautifulSoup(response.text, "html.parser")
            paginator = soup.find('ul', class_='paginator')
            no_pages = 1
            if paginator:
                no_pages = paginator.find('li', class_='last').find_previous_sibling('li').get_text(strip=True)
            
            fetch_products_in_category(products_json_data, sub_category_url, sub_category_name, category_name, no_pages)

