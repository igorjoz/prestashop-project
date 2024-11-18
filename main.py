import threading

from selenium import webdriver
from selenium.common import NoSuchElementException, WebDriverException, TimeoutException
from selenium.webdriver import ActionChains
from selenium.webdriver.common.by import By
from selenium.webdriver.firefox.options import Options
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

import time
import random

from urllib3.exceptions import ReadTimeoutError


def testA(driverA, source):

    result = "passed"
    how_many_categories = 2
    how_many_products_per_cat = 2
    how_many_max = 3

    print("Test A sie rozpoczyna")

    try:
        driver.get(source)
        WebDriverWait(driver=driverA, timeout=5).until(
            EC.presence_of_element_located((By.ID, 'header'))
        )

        categories = driverA.find_elements(By.XPATH,
                                          "//header[@id='header']//ul[contains(@class, 'mm_menus_ul')]/li[contains(@class, 'mm_menus_li')]")
        categories.pop()
        cat_idx = len(categories) - how_many_categories
        categories = categories[cat_idx:]

        cat_addresses = []

        for category in categories:
            cat_addresses.append(category.find_element(By.XPATH, "./a").get_attribute('href'))

        for cat_address in cat_addresses:
            driverA.get(cat_address)
            WebDriverWait(driver=driverA, timeout=5).until(
                EC.presence_of_element_located((By.ID, 'js-product-list'))
            )

            product_addresses = []
            products = driverA.find_elements(By.XPATH,
                                               "//div[@id='js-product-list']//div[@itemprop='itemListElement']//a[@itemprop='url']")

            for i in range(how_many_products_per_cat):
                product_addresses.append(products[i].get_attribute('href'))

            for product_address in product_addresses:
                while True:
                    try:

                            driverA.get(product_address)
                            WebDriverWait(driver=driverA, timeout=5).until(
                                EC.presence_of_element_located((By.CLASS_NAME, 'row.product-container'))
                                and EC.presence_of_element_located((By.ID, 'header'))
                            )



                            col_prod_txt = driverA.find_element(By.XPATH, "//div[@class='row product-container']/div[@id='txt-col-prod']")
                            items_up = col_prod_txt.find_element(By.XPATH, "//button[contains(@class, 'bootstrap-touchspin-up')]")

                            driverA.execute_script("arguments[0].scrollIntoView();", col_prod_txt.find_element(By.XPATH, "//div[@class='product-actions']"))
                            WebDriverWait(driver=driverA, timeout=5).until(
                                EC.visibility_of_element_located((By.CLASS_NAME, "mm_menu_content_title"))
                            )

                            ActionChains(driver=driverA).move_to_element(driverA.find_elements(By.CLASS_NAME, "mm_menu_content_title")[0]).perform()
                            ActionChains(driver=driverA).move_by_offset(0, 100).perform()
                            WebDriverWait(driver=driverA, timeout=5).until(
                                EC.visibility_of_element_located((By.XPATH, "//div[@class='row product-container']/div[@id='txt-col-prod']//button[contains(@class, 'bootstrap-touchspin-up')]"))
                            )

                            ActionChains(driver=driverA).move_to_element(items_up).perform()

                            how_many = random.randint(1, how_many_max)
                            for i in range(how_many-1):
                                WebDriverWait(driver=driverA, timeout=5).until(
                                    EC.element_to_be_clickable(items_up)
                                )
                                items_up.click()

                            ActionChains(driver=driverA).move_to_element(
                                col_prod_txt.find_element(By.XPATH, "//button[contains(@class, 'add-to-cart')]")).perform()
                            add_to_cart = col_prod_txt.find_element(By.XPATH, "//button[contains(@class, 'add-to-cart')]")

                            WebDriverWait(driver=driverA, timeout=5).until(
                                EC.element_to_be_clickable(add_to_cart)
                            )

                            add_to_cart.click()

                            WebDriverWait(driver=driver, timeout=5).until(
                                EC.visibility_of_element_located((By.ID, 'blockcart-modal'))
                            )

                            how_many_added = int(driverA.find_element(By.XPATH, "//div[@id='blockcart-modal']//div[contains(@class, 'col-lg-8')]/span/strong").text)
                            adding_result_text = driverA.find_element(By.XPATH, "//h4[@id='myModalLabel']").text[1:]

                            if how_many_added != how_many or adding_result_text != "Produkt dodany poprawnie do Twojego koszyka":
                                raise ValueError()

                            print("Test A pomyślnie dodal obiekt do koszyka")

                            break

                    except TimeoutException as e:
                        continue



    except Exception as e:
        result = "failed"
        print("Test A nieudany z exception " + str(type(e)))

    print("Test A sie zakonczyl")
    return result

def testC(driverC, source):
    result = "passed"
    how_many_to_delete = 3
    print("Test C sie rozpoczyna")
    try:
        driverC.get(source)
        items_start = driverC.find_elements(By.XPATH, "//section[@id='main']//li[@class='cart-item']")
        items_start_count = len(items_start)

        for _ in range(how_many_to_delete):
            WebDriverWait(driver=driverC, timeout=5).until(
                EC.presence_of_element_located((By.ID, "main"))
            )

            item = driverC.find_elements(By.XPATH, "//section[@id='main']//li[@class='cart-item']")[0]
            item_delete_link = item.find_element(By.XPATH, "//div[@class='cart-line-product-actions']/a").get_attribute('href')
            try:
                driverC.get(item_delete_link)
            except ReadTimeoutError as e:
                while True:
                    try:
                        driverC.refresh()
                        break
                    except ReadTimeoutError as e:
                        continue

            print("Test C usunal produkt z koszyka")

        items_end = driverC.find_elements(By.XPATH, "//section[@id='main']//li[@class='cart-item']")
        items_end_count = len(items_end)

        if items_end_count != items_start_count - how_many_to_delete:
            raise ValueError()

    except Exception as e:
        result = "failed"
        print("Test C nieudany z exception " + str(type(e)))

    print("Test C sie zakonczyl")
    return result



#ustaw baseAddress na swój

if __name__ == '__main__':
    options = Options()
    #options.add_argument("-headless")
    options.add_argument("-width=1020")
    options.add_argument("-height=680")
    driver = webdriver.Firefox(options=options)
    baseAddress = "https://monsteriada.pl"
    koszykAddress = "https://monsteriada.pl/koszyk?action=show"
    driver.get(baseAddress)

    driver.find_element(By.XPATH, "//button[contains(@class, 'x13eucookies__btn--deny')]").click()

    test_results = []

    time_before = time.perf_counter()

    test_results.append(["A", testA(driver, baseAddress)])
    test_results.append(["C", testC(driver, koszykAddress)])

    time_after = time.perf_counter()
    time_of_testing = time_after - time_before

    for test_result in test_results:
        print("Test " + test_result[0] + " ma rezultat " + test_result[1])
    print("Czas wykonania: " + str(time_of_testing))

    driver.quit()
