# -*- coding: utf-8 -*-
from scraper_service.scraper_service import *


def main() -> None:
    json_categories_data = json_init(CATEGORIES_FILEPATH)
    #fetch_categories(json_categories_data, CATEGORIES_FILEPATH)
    #fetch_subcategories(json_categories_data, CATEGORIES_FILEPATH)

    json_products_data = json_init(PRODUCTS_FILEPATH)
    fetch_all_products(json_products_data, json_categories_data)





if __name__ == '__main__':
    main()
