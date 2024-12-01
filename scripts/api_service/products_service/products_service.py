import json
import random
from time import sleep, time
from dotenv import load_dotenv, dotenv_values 
import os
from prestapyt import PrestaShopWebServiceDict
from categories_service.categories_service import categories_ids
from details_service.details_service import *
import requests
import xml.etree.ElementTree as ET

load_dotenv() 
api_url = 'http://localhost:8080/api'
api_key = os.getenv('WEBSERVICE_KEY')

prestashop = PrestaShopWebServiceDict(api_url, api_key)



def delete_existing_products():
    all_products = prestashop.get('products')
    
    if all_products['products'] == '':
        print("No products in shop - deleting not needed")
        return
    
    # xd - api w zaleznosci od ilosci produktow daje kompletnie inna strukture odpowiedzi dlatego taki zapis smiechulcowy
    try:
        no_of_products = len(all_products["products"]['product']['attrs'])
        if no_of_products == 1:
            product_id = all_products['products']['product']['attrs'].get('id')
            prestashop.delete('products', resource_ids=product_id)
            print("One existing product deleted")
            return
    except Exception as e:
        for product in all_products['products']['product']:
            product_id = product['attrs'].get('id')
            try:
                prestashop.delete('products', resource_ids=product_id)
            except Exception as e:
                continue
        print(f"Deleted all products")


err_counter = 0
def add_products():
    excluded_features = ['price', 'img', 'category', 'sub_category', 'description', 'producent_img', 'producent_link']
    
    if None in categories_ids.values():
        print("Categories were incorectly added - please add them first")
        return
    
    
    delete_existing_products()
    #input("press anything to continue...")
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
        "active": "1",
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
        "name": {
            "language": {
                "attrs": {"id": "1"},
                "value": "SAMPLE PRODUCT"
            }
        },
        "description": {
            "language": {
                "attrs": {"id": "1"},
                "value": "<p>SAMPLE DESC</p>"
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
                "product_feature": [

                ]
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
    with open(json_products_filepath, 'r') as file:
        products = json.load(file)
    
    for product_name in products:
        
        #deafult values for product
        
        product_info = products.get(product_name)
    
        sub_category_id = categories_ids.get(product_info.get('sub_category'))
        category_id = categories_ids.get(product_info.get('category'))
        
        product_template['product']['id_category_default'] = sub_category_id
        product_template['product']['associations']['categories']['category']['id'] = sub_category_id
        product_template['product']['name']['language']['value'] = product_name
        product_template['product']['price'] = product_info.get('price')
        product_template['product']['description']['language']['value'] = product_info.get('description')
        
        features = [feature for feature in product_info.keys() if feature not in excluded_features and not feature.startswith('product_img')]
        for feature in features:
            feature_id = features_and_values_ids[feature]
            feature_value = product_info.get(feature)
            
            feature_value_id = features_and_values_ids.get(feature_value)
                   
            product_feature_template = {
            "id": str(feature_id),
            "id_feature_value": str(feature_value_id)
            }
            
            product_template['product']['associations']['product_features']['product_feature'].append(product_feature_template)
            
            
            
        try:
            response = prestashop.add('products', product_template)
            product_template['product']['associations']['product_features']['product_feature'].clear()
            
        except Exception as e:
            print(f"Error while adding product {product_name} - {e}")
            continue
        added_product_id = response['prestashop']['product']['id']
        print(f"Product added - ID: {added_product_id}")
        
        
        
        response_status = 404

        while response_status != 200:
            response = requests.get(
                f"{api_url}/stock_availables?filter[id_product]={added_product_id}&display=full",
                auth=(api_key, ''),
            )
            response_status = response.status_code
        
        response_xml = ET.fromstring(response.text)
        stock_id = int(response_xml.find('.//id').text)
        
        stock_amount = random.randint(0, 10)
        
        stock_xml = f"""<prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
                <stock_available>
                    <id><![CDATA[{stock_id}]]></id>
                    <id_product><![CDATA[{added_product_id}]]></id_product>
                    <id_product_attribute><![CDATA[{0}]]></id_product_attribute>
                    <id_shop><![CDATA[1]]></id_shop>
                    <id_shop_group><![CDATA[0]]></id_shop_group>
                    <quantity><![CDATA[{stock_amount}]]></quantity>
                    <depends_on_stock><![CDATA[0]]></depends_on_stock>
                    <out_of_stock><![CDATA[2]]></out_of_stock>
                    <location><![CDATA[]]></location>
                </stock_available>
                </prestashop>
            """

        response_status = 404

        while response_status != 200:
            response = requests.put(
                f"{api_url}/stock_availables/{stock_id}",
                data=stock_xml,
                auth=(api_key, ''),
            )
            response_status = response.status_code
        
        print(f"Stock for product added - Prod ID: {added_product_id} | Stock ID: {stock_id} | Amount: {stock_amount}")
        
        
        # imgs
        
        img_prefix = 'https://motkomania.pl'
        img_urls = [f"{img_prefix}{product_info.get(feature)}" for feature in product_info.keys() if feature.startswith('product_img')]
        
        no_of_images = len(img_urls)
        
        for i in range(no_of_images):
            image_url = f"data/images/{product_name}_{i}.jpg"
            endpoint = f"{api_url}/images/products/{added_product_id}"
            try:
                with open(image_url, "rb") as image_file:
                    files = {
                        "image": image_file
                    }
                    response_code = 404
                    response = requests.post(
                        endpoint,
                        files=files, 
                        auth=(api_key, '')
                    )
                        
                    
                if response.status_code == 200 or response.status_code == 201:
                    print("Image uploaded successfully!")
                else:
                    print(f"Failed to upload image: {response.status_code}")
                    err_counter +=1
            except Exception as e:
                print(f"Error while uploading image: {e}")
                continue
        print(f"Product {product_name} finished adding - ID {added_product_id}")
    print(f"Error counter: {err_counter}")

