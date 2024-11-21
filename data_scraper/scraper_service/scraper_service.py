from time import sleep

import requests
from bs4 import BeautifulSoup

from json_service.json_service import *


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


def fetch_product_details(product, product_json_data):
    sub_url = product.find('a', class_='prodimage f-row')['href']

    try:
        response = requests.get(f"https://motkomania.pl{sub_url}", timeout=15)
        soup = BeautifulSoup(response.text, "html.parser")
    except Exception as e:
        print(f"Error: {e}")
        return

    description = soup.find('div', class_='product-modules').find('span')
    if description:
        description = description.get_text(strip=True)
        product_json_data.update({"description": description})

    producent = soup.find('div', class_='row manufacturer')
    if producent:
        producent_link = producent.find('a')['href']
        producent_img = producent.find('img')['src']
        product_json_data.update({"producent_img": producent_img, "producent_link": producent_link})

    product_imgs_gallery = soup.find('div', class_='innersmallgallery')
    if product_imgs_gallery:
        product_imgs = product_imgs_gallery.find_all('a')
        for i, img in enumerate(product_imgs, start=1):
            product_json_data.update({f"product_img{i}": img['href']})
    else: #if product has no gallery, add single image
        single_image = soup.find('a', class_='js__gallery-anchor-image')
        product_json_data.update({"product_img1": single_image['href']})

    table = soup.find('div', class_='innerbox tab-content product-attributes zebra')
    if table:
        technical_label = table.find_all('td', class_='name r--l-box-5 r--l-md-box-10 r--l-xs-box-10')
        technical_data = table.find_all('td', class_='value r--l-box-5 r--l-md-box-10 r--l-xs-box-10')
        for (data, label) in zip(technical_data, technical_label):
            product_json_data.update({label.get_text(strip=True): data.get_text(strip=True)})


def fetch_products_in_category(products_json_data: dict, sub_category_data,
                               sub_category_name, category_name, no_pages):
    print(sub_category_name)
    prod_counter = 0 
    for i in range(int(no_pages)):
        try:
            response = requests.get(f"{sub_category_data['url']}/{i+1}", timeout=15)
            soup = BeautifulSoup(response.text, "html.parser")
            main_div = soup.find("div", {"class": "products products_extended viewphot s-row"})
            print(i)
            for product in main_div.find_all("div", {"class": "product-inner-wrap"}):
                try:
                    product_name = product.find("a", {"class": "prodname f-row"})
                    name = product_name.get_text(strip=True)
                    if name in products_json_data.keys(): #check if not default details are fetched
                        fetch_product_details(product, products_json_data[name])
                        continue

                    product_basket = product.find("div", {"class": "product__basket"})
                    product_price = product_basket.find("div", {"class": "price f-row"})
                    product_img = product.find('img')
                    source = 'https://motkomania.pl{}'.format(product_img['data-src'])
                    price = product_price.get_text(strip=True)
                    price = price[5:10].replace(',', '.')

                    product_json_data = {"price": price, "img": source, "category": category_name,
                                         "sub_category": sub_category_name}
                    fetch_product_details(product, product_json_data)
                    products_json_data[name] = product_json_data
                    prod_counter += 1
                    # if prod_counter == 125:
                    #     return
                        
                    
                except Exception as e:
                    print(f"Error while fetching product {category_name}/{sub_category_name}/{i}: {e}")
                    continue
            append_to_json(products_json_data, PRODUCTS_FILEPATH)
        except Exception as e:
            print(f"Error while fetching product list for {category_name}/{sub_category_name}: {e}")
            continue


def fetch_all_products(products_json_data: dict, categories_json_data: dict) -> None:
    for category_name, category_data in categories_json_data.items():
        for sub_category_name, sub_category_data in category_data["sub_categories"].items():
            if category_name not in CATEGORIES_TO_FETCH.keys():
                continue
            if sub_category_name not in CATEGORIES_TO_FETCH[category_name]:
                continue

            print(f"Fetching products for {category_name}/{sub_category_name}")

            try:
                response = requests.get(f"{sub_category_data['url']}", timeout=5)
                soup = BeautifulSoup(response.text, "html.parser")
                paginator = soup.find('ul', class_='paginator')
                no_pages = 0
                if paginator:
                    no_pages = paginator.find('li', class_='last').find_previous_sibling('li').get_text(strip=True)
                fetch_products_in_category(products_json_data, sub_category_data, sub_category_name,
                                           category_name, no_pages)
            except Exception as e:
                print(f"Error while fetching products for {category_name}/{sub_category_name}: {e}")
                continue
