from time import sleep

import requests
from bs4 import BeautifulSoup

from json_service.json_service import *


def fetch_categories(json_data: dict) -> None:
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
            append_to_json(json_data)

            sleep(1)
    except Exception as e:
        print(f"Error while fetching categories: {e}")


def fetch_subcategories(json_data: dict) -> None:
    for category_name, category_data in json_data.items():
        try:
            response = requests.get(category_data["url"], timeout=5)
            soup = BeautifulSoup(response.text, "html.parser")
            list_element = soup.find("li", {"class": "current"})

            for sub_category in list_element.find_all("li"):
                sub_category_name = sub_category.find("a").get_text(strip=True)
                sub_category_url = sub_category.find("a")["href"]
                sub_category_url = f"{category_data["url"]}{sub_category_url}"
                if sub_category_name in json_data[category_name]["sub_categories"]:
                    print(f"Subcategory {category_name}/{sub_category_name} already fetched")
                    continue
                json_data[category_name]["sub_categories"][sub_category_name] = {"url": sub_category_url}
                append_to_json(json_data)
                sleep(1)
        except Exception as e:
            print(f"Error while fetching subcategories for {category_data["url"]}: {e}")

