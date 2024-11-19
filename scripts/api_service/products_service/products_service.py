import json
from dotenv import load_dotenv, dotenv_values 
import os
from prestapyt import PrestaShopWebServiceDict

load_dotenv() 
api_url = 'http://localhost:8080/api'
api_key = os.getenv('WEBSERVICE_KEY')


prestashop = PrestaShopWebServiceDict(api_url, api_key)


# Hardcoded - check with prestashop
categories_ids = {
    "Włóczki wg rodzaju włókna" : 10, 
    "wełna" : 14,
    "bawełna": 15, 
    "Kołowrotki i akcesoria": 11,
    "Kołowrotki": 16,
    "Części i akcesoria": 17,
    "Krosna i akcesoria": 12,
    "Krosna" : 18,
    "Akcesoria i i części" : 19,
    "Druty i akcesoria": 13,
    "Addi" : 20,
    "Clover" : 21
}



def add_products():
    products_json_filepath = "data/products.json"
    with open(products_json_filepath, 'r') as file:
        products = json.load(file)
    
    # for product_name in products:
    #     product_info = products.get(product_name)
        
    #     category_name = product_info.get('category')
    #     sub_category_name = product_info.get('sub_category')
    
    products_template = prestashop.get('products', options={'schema': 'blank'})
    print(products_template)
    
        
        
