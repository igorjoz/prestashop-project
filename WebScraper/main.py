import os

from parsel import Selector
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.firefox.options import Options
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import json
import requests

httpAddressOffset = 22
numberOfFetchedPhotos = 2

def fetchImgGeneral(txt_col_prod):
    img_paths_general = [
        txt_col_prod.xpath("//div[contains(@class, 'product-manufacturer')]/a").css("img::attr(src)").get()]
    save_img_path = "Img/ImgGeneral/"
    if img_paths_general[0] is not None:
        for url in img_paths_general:
            try:
                response = requests.get(url, stream=True)
                img_path = save_img_path + url[(url.rfind("/") + 1):]
                with open(img_path, 'wb') as file:
                    for chunk in response.iter_content(chunk_size=1024):
                        if chunk:
                            file.write(chunk)

            except Exception as e:
                print(f"Failed to download general image " + url + ": {e}")


def fetchImgMedium(img_col_prod):
    global numberOfFetchedPhotos, httpAddressOffset
    img_paths_medium = img_col_prod.xpath("//ul[contains(@class, 'product-images')]").css(
        "img::attr(data-image-medium-src)").getall()[:numberOfFetchedPhotos]
    save_img_path = "Img/ImgMedium/"

    if len(img_paths_medium) != 0:
        for url in img_paths_medium:
            try:
                response = requests.get(url, stream=True)
                dir_path = save_img_path + url[(httpAddressOffset+1):(url.rfind("/"))]
                os.makedirs(dir_path, exist_ok=True)
                img_path = save_img_path + url[(httpAddressOffset+1):]
                with open(img_path, 'wb') as file:
                    for chunk in response.iter_content(chunk_size=1024):
                        if chunk:
                            file.write(chunk)

            except Exception as e:
                print(f"Failed to download medium image " + url + ": {e}")


def fetchImgLarge(img_col_prod):
    global numberOfFetchedPhotos, httpAddressOffset
    img_paths_large = img_col_prod.xpath("//ul[contains(@class, 'product-images')]").css(
        "img::attr(data-image-large-src)").getall()[:numberOfFetchedPhotos]
    save_img_path = "Img/ImgLarge/"

    if len(img_paths_large) != 0:
        for url in img_paths_large:
            try:
                response = requests.get(url, stream=True)
                dir_path = save_img_path + url[(httpAddressOffset + 1):(url.rfind("/"))]
                os.makedirs(dir_path, exist_ok=True)
                img_path = save_img_path + url[(httpAddressOffset+1):]
                with open(img_path, 'wb') as file:
                    for chunk in response.iter_content(chunk_size=1024):
                        if chunk:
                            file.write(chunk)

            except Exception as e:
                print(f"Failed to download large image " + url + ": {e}")


def scrape(text):
    global httpAddressOffset, numberOfFetchedPhotos
    sel = Selector(text=text)
    parsed = []

    img_col_prod = sel.xpath("//div[@class='row product-container']/div[@id='img-col-prod']")
    txt_col_prod = sel.xpath("//div[@class='row product-container']/div[@id='txt-col-prod']")
    clearfix_tabs = sel.xpath("//div[@class='clearfix tabs']")

    fetchImgGeneral(txt_col_prod)
    fetchImgMedium(img_col_prod)
    fetchImgLarge(img_col_prod)

    parsed.append({
        'title': txt_col_prod.xpath("//div[@class='title-status']").css("h1::text").get(),
        'flags': img_col_prod.xpath("section/ul[@class='product-flags']").css("li::text").getall(),
        'locationsOfImgMediumResources': [s[httpAddressOffset:] for s in
                                          img_col_prod.xpath("section//ul[contains(@class, 'product-images')]").css(
                                              "img::attr(data-image-medium-src)").getall()[:numberOfFetchedPhotos]],
        'locationsOfImgLargeResources': [s[httpAddressOffset:] for s in
                                         img_col_prod.xpath("section//ul[contains(@class, 'product-images')]").css(
                                             "img::attr(data-image-large-src)").getall()[:numberOfFetchedPhotos]],
        'available': txt_col_prod.xpath("//div[@class='title-status']//span[contains(@class, 'badge')]").css(
            "span::text").get(),
        'facebookIconLink': txt_col_prod.xpath(
            "//div[@class='title-status']//div[contains(@class, 'social-sharing')]").css(
            "a::attr(href)").get(),
        'brandName': txt_col_prod.xpath("//div[contains(@class, 'product-manufacturer')]/a").css(
            "meta::attr(content)").get() if txt_col_prod.xpath("//div[contains(@class, 'product-manufacturer')]/a").get() is not None else 'None',
        'locationOfBrandLogoResource': txt_col_prod.xpath("//div[contains(@class, 'product-manufacturer')]/a").css(
            "img::attr(src)").get()[httpAddressOffset:] if txt_col_prod.xpath("//div[contains(@class, 'product-manufacturer')]").get() is not None else 'None',
        'locationOfSearchingByBrandResource': txt_col_prod.xpath("//div[contains(@class, 'product-manufacturer')]").css(
            "a::attr(href)").get()[httpAddressOffset:] if txt_col_prod.xpath("//div[contains(@class, 'product-manufacturer')]").get() is not None else 'None',
        'shortDescription': txt_col_prod.xpath("//div[@class='product-description']").css('p::text').get(),
        'token': txt_col_prod.xpath("//div[@class='product-actions']//input[@name='token']/@value").get(),
        'id_product': txt_col_prod.xpath("//div[@class='product-actions']//input[@name='id_product']/@value").get(),
        'id_customization': txt_col_prod.xpath(
            "//div[@class='product-actions']//input[@name='id_customization']/@value").get(),
        # maybe product variants
        'priceData': {
            'currency': txt_col_prod.xpath(
                "//div[@class='product-actions']//meta[@itemprop='priceCurrency']/@content").get(),
            'validUntil': txt_col_prod.xpath(
                "//div[@class='product-actions']//meta[@itemprop='priceValidUntil']/@content").get(),
            'price': txt_col_prod.xpath("//div[@class='product-actions']//span[@itemprop='price']/@content").get(),
            'priceText': txt_col_prod.xpath("//div[@class='product-actions']//div[@class='current-price']").css(
                "span::text").get().replace(u'\xa0', " "),
            'additionalInfo': txt_col_prod.xpath("//div[@class='product-actions']//div[@class='product-prices']/div[2]").get()
            # maybe product discounts
        },
        'moreData': [{
            'productDescription': clearfix_tabs.xpath("//ul[contains(@class, 'nav-tabs')]/li[1]").css("a::text").get(),
            'productDescriptionContent': clearfix_tabs.xpath("//div[@id='tab-content']/div[1]/div[1]").get()
        },
            {
                'productDetails': clearfix_tabs.xpath("//ul[contains(@class, 'nav-tabs')]/li[2]").css("a::text").get(),
                'productDetailsContent': clearfix_tabs.xpath("//div[@id='product-details']/section/dl").get()
            }
        ]
        #jeszcze preorder!!
    })
    return parsed


if __name__ == '__main__':
    options = Options()
    # options.add_argument("-headless")
    options.add_argument("-width=1020")
    options.add_argument("-height=680")
    driver = webdriver.Firefox(options=options)
    driver.get(
        "https://monsteriada.pl/mortal-kombat-gadzety/273-popiersie-scorpion-gallery-12-25-cm-mortal-kombat-legends.html")
    element = WebDriverWait(driver=driver, timeout=5).until(
        EC.presence_of_element_located((By.CLASS_NAME, 'row.product-container'))
        and EC.presence_of_element_located((By.CLASS_NAME, 'clearfix.tabs'))
    )
    data_json = scrape(driver.page_source)
    with open('data.json', 'w', encoding='utf-8') as file:
        json.dump(data_json, file, indent=2, ensure_ascii=False)

    driver.quit()
