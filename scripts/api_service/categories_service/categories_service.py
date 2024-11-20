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


categories_ids = {
    "Włóczki wg rodzaju włókna" : None, 
    "wełna" : None,
    "bawełna": None, 
    "Kołowrotki i akcesoria": None,
    "Kołowrotki": None,
    "Części i akcesoria": None,
    "Krosna i akcesoria": None,
    "Krosna" : None,
    "Akcesoria i i części" : None,
    "Druty i akcesoria": None,
    "Addi" : None,
    "Clover" : None
}


def delete_existing_categories():
    all_categories = prestashop.get('categories')

    counter = 0
    for category in all_categories['categories']['category']:
        if int(category['attrs']['id']) != 1 and int(category['attrs']['id']) != 2:
            try:
                prestashop.delete('categories', resource_ids=category['attrs']['id'])
                counter += 1
            except Exception as e:
                continue
    print(f"Deleted {counter} categories")
    
    
    

def add_categories():
    delete_existing_categories()
    input("press anything to continue...")
    
    
    category_template = {
        "category": {
            "name": {
                "language": {
                    "attrs": {"id": "1"},
                    "value": "Category demo"
                }
            },
            "link_rewrite": {
                "language": {
                    "attrs": {"id": "1"},
                    "value": "category-demo"
                }
            },
            "description": {
                "language": {
                    "attrs": {"id": "1"},
                    "value": "Nadrzędna kategoria"
                }
            },
            "active": 1,
            "id_parent": 2
        }
    }
    
    
    category_counter = 0
    sub_category_counter = 0
    for category in fetched_categories:
        category_template['category']['name']['language']['value'] = category
        category_template['category']['link_rewrite']['language']['value'] = category.lower().replace(" ", "-")
        response = prestashop.add('categories', category_template)
        id = int(response['prestashop']['category']['id'])
        categories_ids[category] = id
        
        for sub_category in fetched_categories[category]:
            add_sub_category(sub_category, id)
            sub_category_counter += 1
        category_counter +=1 
        
    print(f"Added {category_counter} categories")
    print(f"Added {sub_category_counter} sub-categories")


def add_sub_category(sub_category, parent_id):
    sub_category_template = {
        "category": {
            "name": {
                "language": {
                    "attrs": {"id": "1"},
                    "value": "Category demo"
                }
            },
            "link_rewrite": {
                "language": {
                    "attrs": {"id": "1"},
                    "value": "category-demo"
                }
            },
            "description": {
                "language": {
                    "attrs": {"id": "1"},
                    "value": "Podrzędna kategoria"
                }
            },
            "active": 1,
            "id_parent": parent_id
        }
    }
    sub_category_template['category']['name']['language']['value'] = sub_category
    sub_category_template['category']['link_rewrite']['language']['value'] = sub_category.lower().replace(" ", "-")
    response = prestashop.add('categories', sub_category_template)
    id = int(response['prestashop']['category']['id'])
    categories_ids[sub_category] = id
    
    