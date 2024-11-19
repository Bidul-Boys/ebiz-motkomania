from dotenv import load_dotenv, dotenv_values 
import os

load_dotenv() 
api_url = 'http://localhost:8080/api'
api_key = os.getenv('WEBSERVICE_KEY')

from prestapyt import PrestaShopWebServiceDict
prestashop = PrestaShopWebServiceDict(api_url, api_key)

fetched_categories: dict = {
        "Włóczki wg rodzaju włókna": ["wełna", "bawełna"],
        "Kołowrotki i akcesoria": ["Kołowrotki", "Części i akcesoria"],
        "Krosna i akcesoria": ["Krosna", "Akcesoria i i części"],
        "Druty i akcesoria": ["Addi", "Clover"]
    }


def add_categories():
    category_template = prestashop.get('categories/3', options={'schema': 'blank'})
    del category_template['category']['id']
    del category_template['category']['level_depth']
    del category_template['category']['nb_products_recursive']
    for k in fetched_categories:
        category_template['category']['name']['language'].update({
            'value': k
        })
        prestashop.add('categories', category_template)


def add_sub_categories():
    all_categories = prestashop.get('categories')
    sub_category_template = prestashop.get('categories/4', options={'schema': 'blank'})
    del sub_category_template['category']['id']
    del sub_category_template['category']['level_depth']
    del sub_category_template['category']['nb_products_recursive']

    for cat in all_categories['categories']['category']:
        i = cat['attrs']['id']
        category = prestashop.get('categories', i)
        category_name = category['category']['name']['language']['value']
        if category_name in fetched_categories.keys():
            sub_category_template['category']['id_parent'] = i
            for fetched_sub_category in fetched_categories[category_name]:
                sub_category_template['category']['name']['language'].update({
                    'value': fetched_sub_category
                })
                prestashop.add('categories', sub_category_template)

    
    