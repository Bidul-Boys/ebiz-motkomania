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

def delete_existing_products():
    all_products = prestashop.get('products')
    if len(all_products['products']) == 0:
        print("All already products deleted")
        return
    
    
    for product in all_products['products']['product']:
        product_id = product['attrs'].get('id')
        try:
            prestashop.delete('products', resource_ids=product_id)
        except Exception as e:
            continue
    all_products = prestashop.get('products')
    all_products = prestashop.get('products')
    
    if len(all_products['products']) == 0:
        print("All products deleted succsessfully")
    else:
        print("Some products were not deleted")




def add_products():
    delete_existing_products()
    input("press anything to continue...")
    json_products_filepath = "data/products.json"
    
    
    product_template = {
    "product": {
        "id_manufacturer": "0",
        "id_supplier": "0",
        "id_category_default": "2",
        "new": "",
        "cache_default_attribute": "0",
        "id_default_image": {
            "attrs": {"notFilterable": "true"},
            "value": ""
        },
        "id_default_combination": {
            "attrs": {"notFilterable": "true"},
            "value": "0"
        },
        "id_tax_rules_group": "0",
        "type": {
            "attrs": {"notFilterable": "true"},
            "value": "simple"
        },
        "id_shop_default": "1",
        "reference": "",
        "supplier_reference": "",
        "location": "",
        "width": "0.000000",
        "height": "0.000000",
        "depth": "0.000000",
        "weight": "0.000000",
        "quantity_discount": "0",
        "ean13": "",
        "isbn": "",
        "upc": "",
        "mpn": "",
        "cache_is_pack": "0",
        "cache_has_attachments": "0",
        "is_virtual": "0",
        "state": "1",
        "additional_delivery_times": "1",
        "delivery_in_stock": {
            "language": {
                "attrs": {"id": "1"},
                "value": ""
            }
        },
        "delivery_out_stock": {
            "language": {
                "attrs": {"id": "1"},
                "value": ""
            }
        },
        "product_type": "",
        "on_sale": "0",
        "online_only": "0",
        "ecotax": "0.000000",
        "minimal_quantity": "1",
        "low_stock_threshold": "",
        "low_stock_alert": "0",
        "price": "0.000000",
        "wholesale_price": "0.000000",
        "unity": "",
        "unit_price_ratio": "0.000000",
        "additional_shipping_cost": "0.000000",
        "customizable": "0",
        "text_fields": "0",
        "uploadable_files": "0",
        "active": "0",
        "redirect_type": "404",
        "id_type_redirected": "0",
        "available_for_order": "1",
        "available_date": "0000-00-00",
        "show_condition": "0",
        "condition": "new",
        "show_price": "1",
        "indexed": "0",
        "visibility": "both",
        "advanced_stock_management": "0",
        "date_add": "2024-11-19 20:20:02",
        "date_upd": "2024-11-19 20:20:17",
        "pack_stock_type": "3",
        "meta_description": {
            "language": {
                "attrs": {"id": "1"},
                "value": ""
            }
        },
        "meta_keywords": {
            "language": {
                "attrs": {"id": "1"},
                "value": ""
            }
        },
        "meta_title": {
            "language": {
                "attrs": {"id": "1"},
                "value": ""
            }
        },
        "link_rewrite": {
            "language": {
                "attrs": {"id": "1"},
                "value": "123"
            }
        },
        "name": {
            "language": {
                "attrs": {"id": "1"},
                "value": "123"
            }
        },
        "description": {
            "language": {
                "attrs": {"id": "1"},
                "value": "<p>123</p>"
            }
        },
        "description_short": {
            "language": {
                "attrs": {"id": "1"},
                "value": "<p>123</p>"
            }
        },
        "available_now": {
            "language": {
                "attrs": {"id": "1"},
                "value": ""
            }
        },
        "available_later": {
            "language": {
                "attrs": {"id": "1"},
                "value": ""
            }
        },
        "associations": {
            "categories": {
                "attrs": {"nodeType": "category", "api": "categories"},
                "category": {"id": "2"}
            },
            "images": {
                "attrs": {"nodeType": "image", "api": "images"},
                "value": ""
            },
            "combinations": {
                "attrs": {"nodeType": "combination", "api": "combinations"},
                "value": ""
            },
            "product_option_values": {
                "attrs": {"nodeType": "product_option_value", "api": "product_option_values"},
                "value": ""
            },
            "product_features": {
                "attrs": {"nodeType": "product_feature", "api": "product_features"},
                "value": ""
            },
            "tags": {
                "attrs": {"nodeType": "tag", "api": "tags"},
                "value": ""
            },
            "stock_availables": {
                "attrs": {"nodeType": "stock_available", "api": "stock_availables"},
                "stock_available": {
                    "id": "72",
                    "id_product_attribute": "0"
                }
            },
            "attachments": {
                "attrs": {"nodeType": "attachment", "api": "attachments"},
                "value": ""
            },
            "accessories": {
                "attrs": {"nodeType": "product", "api": "products"},
                "value": ""
            },
            "product_bundle": {
                "attrs": {"nodeType": "product", "api": "products"},
                "value": ""
            }
        }
    }
    }
    one_prod = prestashop.get('products', options={'schema': 'blank'})
    with open(json_products_filepath, 'r') as file:
        products = json.load(file)
    
        
    for product_name in products:
        product_info = products.get(product_name)
    
        sub_category_id = categories_ids.get(product_info.get('sub_category'))
        
        product_template['product']['id_category_default'] = sub_category_id
        product_template['product']['name']['language']['value'] = product_name
        product_template['product']['price'] = product_info.get('price')
        product_template['product']['description']['language']['value'] = product_info.get('description')
        try:
            prestashop.add('products', product_template)
        except Exception as e:
            print(f"Error while adding product {product_name} - {e}")
            continue
        print(f"Product {product_name} added")
    

    
    