import json
from dotenv import load_dotenv, dotenv_values 
import os
from prestapyt import PrestaShopWebServiceDict

load_dotenv() 
api_url = 'http://localhost:8080/api'
api_key = os.getenv('WEBSERVICE_KEY')

prestashop = PrestaShopWebServiceDict(api_url, api_key)


features_and_values_ids = {}


def delete_existing_features_and_attributes():
    features = prestashop.get('product_features', options={'display': '[id]'})
    feature_counter = 0
    if features['product_features'] == "":
        print("No features to delete")
    else:
        for feature in features['product_features']['product_feature']:
            feature_id = feature['id']
            prestashop.delete('product_features', feature_id)
            feature_counter += 1
        print(f"Deleted {feature_counter} features")
            
    
    attributes = prestashop.get('product_options', options={'display': '[id]'})
    attributes_counter = 0
    
    if attributes['product_options'] == "":
        print("No attributes to delete")
    else:
        for attribute in attributes['product_options']['product_option']:
            attribute_id = attribute['id']
            prestashop.delete('product_options', attribute_id)
            attributes_counter += 1
        print(f"Deleted {attributes_counter} attributes")



def get_included_features():
    excluded_features = ['price', 'img', 'category', 'sub_category', 'description', 'producent_img', 'producent_link']
    # Adding features to prestashop - for later adding them to products
    included_features = {}
    json_products_filepath = "data/products.json"
    with open(json_products_filepath, 'r') as file:
        products = json.load(file)

    for product_name in products:
        product_info = products[product_name]
        
        features = [feature for feature in product_info.keys() if feature not in excluded_features and not feature.startswith('product_img')]
        
        for feature in features:
            if feature not in included_features:
                included_features[feature] = [product_info[feature]]
            else:
                if product_info[feature] not in included_features[feature]:
                    included_features[feature].append(product_info[feature])
    return included_features



def add_features():
    delete_existing_features_and_attributes()
    input("press anything to continue...")
    included_features = get_included_features()
    
    for feature in included_features:
        feature_template = {
            "product_feature": {
                "name": {
                    "language": {
                        "attrs": {"id": "1"},
                        "value": feature
                    }
                }
            }
        }
        response = prestashop.add('product_features', feature_template)
        feature_id = int(response['prestashop']['product_feature']['id'])
        
        features_and_values_ids[feature] = feature_id
        
        add_values_to_feature(feature_id, included_features[feature])



def add_values_to_feature(feature_id, values):
    for value in values:
        f_value = value.replace('=', ' ').replace('<', ' ').replace('>', ' ').replace(';', ' ').replace('#', ' ').replace('{', ' ').replace('}', ' ')
        feature_value_template = {
            "product_feature_value": {
                "id_feature": feature_id,
                "value": {
                    "language": {
                        "attrs": {"id": "1"},
                        "value": str(f_value)
                    }
                }
            }
        }
        
        response = prestashop.add('product_feature_values', feature_value_template)
        value_id = int(response['prestashop']['product_feature_value']['id'])
        features_and_values_ids[value] = value_id
        
    
    
        
        
        
    