import json
import prestapyt

URL = "http://localhost:8080/api/"
API_KEY = "F2WY4KDW76DP99L7H7RDLJGUZQJBFHYW"

def add_scraped_products(file_path):
    with open(file_path) as f:
        data = json.load(f)
        products = data['categoryContent']
        
        try:
            products = products['sub-subcategoryContent']
        except KeyError:
            pass
        
def remove_empty_fields_from_product(product):
    product = product['product']
    keys_to_remove = []
    for key in product:
        if product[key] == '':
            keys_to_remove.append(key)
    for key in keys_to_remove:
        del product[key]
    return {'product': product}
        
def add_product(product_to_be_added, category_id):
    # check if the product already exists in db to avoid duplicates #TODO check for duplicates
    #         # TODO: update product categories in such case
            
    # create empty product
    product = ps.get('products', options={'schema': 'blank'})
    #product_empty = ps.get('products', options={'schema': 'blank'}) # debug
    
    # fill the product with data
    product['product']['name']['language']['value'] = product_to_be_added['title']
    #product['product']['description']['language']['value'] = product_to_be_added['moreData'][0]['productDescriptionContent']
    #product['product']['description_short']['language']['value'] = product_to_be_added['description']
    product['product']['description']['language']['value'] = "desc" # TODO TEMP
    product['product']['description_short']['language']['value'] = "short_desc" # TODO TEMP
    product['product']['price'] = str(product_to_be_added['priceData']['price'])
    product['product']['active'] = 1
    product['product']['id_category_default'] = int(category_id)
    product['product']['associations']['categories'] = {
        "category": [
            {'id': category_id},
            {'id': 1}
        ]
    }
    product['product']['id_manufacturer'] = 0
    product['product']['id_supplier'] = 0
    #product['product']['cache_default_attribute'] = 0
    product['product']['id_shop_default'] = 1
    product['product']['state'] = 1
    product['product']['on_sale'] = 0
    #product['product']['online_only'] = 0
    product['product']['minimal_quantity'] = 1
    product['product']['low_stock_alert'] = 0
    product['product']['active'] = 1
    product['product']['available_for_order'] = 1
    product['product']['show_price'] = 1
    #product['product']['indexed'] = 1
    #product['product']['visibility'] = "both"
    
    # remove empty fields from product
    product = remove_empty_fields_from_product(product)

    # add the product to db
    try:
        ps.add('products', product)
        print(f"Added product: {product_to_be_added['title']}")
    except prestapyt.prestapyt.PrestaShopWebServiceError as e:
        print(f"Failed to add product: {product_to_be_added['title']}. Error: {e}")

def add_single_category(name, parent_id=2):
    category = ps.get('categories', options={'schema': 'blank'})
    category['category']['name']['language']['value'] = name
    category['category']['link_rewrite']['language']['value'] = name.lower().replace(" ", "-")
    category['category']['active'] = 1
    category['category']['id_parent'] = parent_id
    
    try:
        saved_category = ps.add('categories', category)
        print(f"Added category: {name}")
        return int(saved_category['prestashop']['category']['id'])
    except prestapyt.prestapyt.PrestaShopWebServiceError as e:
        print(f"Failed to add category: {name}. Error: {e}")
        return None
        
def add_scraped_data(file_path):
    # read json file
    with open(file_path) as f:
        data = json.load(f)
        categories = data['categoryName'] # root category
        # add root category
        main_category_id = add_single_category(categories, 2)
        
        if main_category_id is None:
            print(f"Failed to add main category: {categories}")
            return
        
        # add subcategories and sub-subcategories
        categories = data['categoryContent']
        for category in categories:
            category_name = category['subcategoryName']
            category_id = add_single_category(category_name, main_category_id)
            
            if category_id is None:
                continue
            else:
                try:
                    for subcategory in category['subCategoryContent']:
                        subcategory_name = subcategory['sub-subcategoryName']
                        subcategory_id = add_single_category(subcategory_name, category_id)
                        # add products that belong to sub-sub categories
                        for product in subcategory['sub-subcategoryContent']:
                            add_product(product, subcategory_id)
                except KeyError:
                    print(f"No subcategories for category: {category_name}")
                    subcategory_name = category_name
                    subcategory_id = category_id
                    # add products that belong to sub categories
                    for product in category['subCategoryContent']:
                        add_product(product, subcategory_id)             
        
        
def get_all_categories():
    print("All currently available categories:")
    #print(ps.get('categories', options={'display': "full"})) #debug
    print(ps.get('categories',))
        
def get_all_products():
    print("All currently available products:")
    #print(ps.get('products', options={'display': "full"})) # debug, display full info about product
    print(ps.get('products'))

def remove_all_products():
    products = ps.get('products')
    if not products['products']:
        print("No products to remove")
        return
    
    for p in products['products']['product']:
        product_id = p['attrs']['id']
        try:
            ps.delete('products', resource_ids=product_id)
            print(f"Deleted product with id: {product_id}")
        except prestapyt.prestapyt.PrestaShopWebServiceError as e:
            print(f"Failed to delete product with id: {product_id}. Error: {e}")
    print("All products removed")
    
    
def remove_existing_categories():
    categories = ps.get('categories')
    if 'categories' not in categories or not categories['categories']['category']:
        print("No categories to remove")
        return
    
    for c in categories['categories']['category']:
        category_id = int(c['attrs']['id'])
        if category_id in [1, 2]:
            continue
        try:
            ps.delete('categories', resource_ids=category_id)
            print(f"Deleted category with id: {category_id}")
        except prestapyt.prestapyt.PrestaShopWebServiceError as e:
            print(f"Failed to delete category with id: {category_id}. Error: {e}")
    print("All categories removed")

if __name__ == "__main__":
    ps = prestapyt.PrestaShopWebServiceDict(URL, API_KEY)
    
    # remove all products
    remove_all_products()
    #get_all_products()
    
    # remove all categories
    remove_existing_categories()
    get_all_categories()
    
    # add scrapped products and categories to db
    add_scraped_data("./web-scraper/scraped-data/gadzetyWgKategorii.json")
    add_scraped_data("./web-scraper/scraped-data/gadzetyWgTematyki.json")
    
    #TODO README.md