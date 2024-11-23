import requests
import json
import os.path

def download_image(url, save_path):
    try:
        response = requests.get(url, stream=True, timeout=10) 
        response.raise_for_status()

        with open(save_path, 'wb') as file:
            for chunk in response.iter_content(chunk_size=8192):
                file.write(chunk)

        print(f"Image downloaded successfully: {save_path}")
    except requests.exceptions.RequestException as e:
        print(f"Error downloading image: {e}")



def download_all_images():
    json_products_filepath = "data/products.json"
        
    with open(json_products_filepath, 'r') as file:
        products = json.load(file)
    
    for product_name in products:
        product_info = products.get(product_name)
        
        
        base_img_url = product_info.get('img')
        img_prefix = 'https://motkomania.pl'
        img_urls = [f"{img_prefix}{product_info.get(feature)}" for feature in product_info.keys() if feature.startswith('product_img')]
        img_urls.append(base_img_url)
        
        counter_img = 0
        for url in img_urls:
            
            image_url = f"data/images/{product_name}_{counter_img}.jpg"
            counter_img += 1
            
            if os.path.exists(image_url):
                print(f"Image already exists: {image_url}")
            else:
                download_image(url, image_url)

for _ in range(40):
    download_all_images()
        