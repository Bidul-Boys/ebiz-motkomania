import requests
from bs4 import BeautifulSoup
from lxml import etree
import os


def get_data(base_url: str, url_counter: int):
    try:
        response = requests.get(f"{base_url}/{url_counter}", timeout=5)
        soup = BeautifulSoup(response.text, "html.parser")
        main_div = soup.find("div", {"class": "products products_extended viewphot s-row"})
    except Exception as e:
        print(f"Error: {e}")
        return

    image_dir = 'pictures'
    try:
        os.mkdir(image_dir)
    except:
        pass


    for product in main_div.find_all("div", {"class": "product-inner-wrap"}):
        if product is None:
            continue

        product_name = product.find("a", {"class": "prodname f-row"})
        product_basket = product.find("div", {"class": "product__basket"})
        product_price = product_basket.find("div", {"class": "price f-row"})

        product_img = product.find('img')
        source = 'https://motkomania.pl{}'.format(product_img['data-src'])  

        name = product_name.get_text(strip=True)
        price = product_price.get_text(strip=True)
        with open("data.txt", "a", encoding="utf8") as file:
            text = f"{name:60} {price.split(":")[1].strip()}"
            file.write(f"{text}\n")

        flag = requests.get(source)
        if flag.status_code != 200:
            print("error")
        else:
            path = image_dir + '/' + name + '.jpg'
            with open(path, 'wb') as f:
                f.write(flag.content)
