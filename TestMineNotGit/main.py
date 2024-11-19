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
    how_many_products_per_cat = 5
    how_many_max = 3

    print("Test A sie rozpoczyna")

    try:
        driverA.get(source)
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
                            )

                            col_prod_txt = driverA.find_element(By.XPATH, "//div[@class='row product-container']/div[@id='txt-col-prod']")
                            items_up = col_prod_txt.find_element(By.XPATH, "//button[contains(@class, 'bootstrap-touchspin-up')]")

                            driverA.execute_script("arguments[0].scrollIntoView();", col_prod_txt.find_element(By.XPATH, "//div[@class='product-actions']"))
                            driverA.execute_script("window.scrollBy(0, -100);")
                            WebDriverWait(driver=driverA, timeout=5).until(
                                EC.visibility_of_element_located((By.XPATH, "//div[@class='row product-container']/div[@id='txt-col-prod']//button[contains(@class, 'bootstrap-touchspin-up')]"))
                            )

                            how_many = random.randint(1, how_many_max)
                            for i in range(how_many-1):
                                WebDriverWait(driver=driverA, timeout=5).until(
                                    EC.element_to_be_clickable(items_up)
                                )
                                items_up.click()

                            add_to_cart = col_prod_txt.find_element(By.XPATH, "//button[contains(@class, 'add-to-cart')]")
                            WebDriverWait(driver=driverA, timeout=5).until(
                                EC.element_to_be_clickable(add_to_cart)
                            )
                            add_to_cart.click()

                            WebDriverWait(driver=driverA, timeout=5).until(
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

        print("Test A sie zakonczyl")

    except ValueError as e:
        result = "failed"
        print("Test A nieudany")

    except Exception as e:
        result = "failed"
        print("W tescie A wystapil wyjatek " + str(type(e)))

    return result

def testB(driverB, source):
    result = "passed"
    print("Test B sie rozpoczyna")
    try:
        driverB.get(source)
        WebDriverWait(driver=driverB, timeout=5).until(
            EC.presence_of_element_located((By.ID, 'header'))
        )

        search_bar = driverB.find_element(By.XPATH, ".//div[@id='search_widget']//input[contains(@placeholder, 'Szukaj...')]")
        submit_button = driverB.find_element(By.XPATH, ".//div[@id='search_widget']//button")
        driverB.execute_script("arguments[0].scrollIntoView();",
                               search_bar)
        driverB.execute_script("window.scrollBy(0, -100);")
        WebDriverWait(driver=driverB, timeout=5).until(
            EC.element_to_be_clickable(
                search_bar)
        )
        search_bar.send_keys('yoda')

        driverB.execute_script("arguments[0].scrollIntoView();",
                               submit_button)
        driverB.execute_script("window.scrollBy(0, -100);")
        WebDriverWait(driver=driverB, timeout=5).until(
            EC.element_to_be_clickable(
                submit_button)
        )
        submit_button.click()

        WebDriverWait(driver=driverB, timeout=5).until(
            EC.presence_of_element_located((By.ID, "js-product-list"))
        )

        print("Test B wyszukal produkt po nazwie")

        products = driverB.find_elements(By.XPATH, ".//div[@id='js-product-list']/div[@class='products row']/div")

        list_of_checked = []
        how_many_checked = 0
        how_many = len(products)
        while how_many_checked != how_many:
            idx = random.randint(0, how_many - 1)
            try:
                products[idx].find_element(By.XPATH, ".//*[contains(text(), 'Niedostępny')]")
                list_of_checked.append(idx)
                how_many_checked += 1
                continue
            except NoSuchElementException as e:
                add_to_cart = products[idx].find_element(By.XPATH, ".//button[contains(text(), 'Do koszyka')]")
                driverB.execute_script("arguments[0].scrollIntoView();",
                                       add_to_cart)
                driverB.execute_script("window.scrollBy(0, -100);")
                WebDriverWait(driver=driverB, timeout=5).until(
                    EC.element_to_be_clickable(
                        add_to_cart)
                )
                add_to_cart.click()
                break

        WebDriverWait(driver=driverB, timeout=5).until(
            EC.visibility_of_element_located((By.ID, 'blockcart-modal'))
        )

        adding_result_text = driverB.find_element(By.XPATH, "//h4[@id='myModalLabel']").text[1:]

        if adding_result_text != "Produkt dodany poprawnie do Twojego koszyka":
            raise ValueError()

        print("Test B poprawnie dodal do koszyka")
        print("Test B sie zakonczyl")

    except ValueError as e:
        result = "failed"
        print("Test B nieudany")

    except Exception as e:
        result = "failed"
        print("W tescie B wystapil wyjatek " + str(type(e)))

    return result

def testC(driverC, source):
    result = "passed"
    how_many_to_delete = 3
    print("Test C sie rozpoczyna")
    try:
        driverC.get(source)
        WebDriverWait(driver=driverC, timeout=5).until(
            EC.presence_of_element_located((By.ID, "main"))
        )

        items_start = driverC.find_elements(By.XPATH, "//section[@id='main']//li[@class='cart-item']")
        items_start_count = len(items_start)

        for _ in range(how_many_to_delete):
            item_tbd = driverC.find_elements(By.XPATH, "//section[@id='main']//li[@class='cart-item']")[0]
            driverC.execute_script("arguments[0].scrollIntoView();",
                                   item_tbd.find_element(By.XPATH, ".//div[@class='cart-line-product-actions']/a"))
            driverC.execute_script("window.scrollBy(0, -100);")
            WebDriverWait(driver=driverC, timeout=5).until(
                EC.element_to_be_clickable(
                    item_tbd.find_element(By.XPATH, ".//div[@class='cart-line-product-actions']/a"))
                and EC.visibility_of(
                    item_tbd.find_element(By.XPATH, ".//div[@class='cart-line-product-actions']/a"))
            )
            item_tbd.find_element(By.XPATH, ".//div[@class='cart-line-product-actions']/a").click()
            while True:
                try:
                    driverC.refresh()
                    break
                except (ReadTimeoutError, TimeoutException) as e:
                    continue

            print("Test C usunal produkt z koszyka")

        WebDriverWait(driver=driverC, timeout=5).until(
            EC.presence_of_element_located((By.ID, "main"))
        )

        items_end = driverC.find_elements(By.XPATH, "//section[@id='main']//li[@class='cart-item']")
        items_end_count = len(items_end)

        if items_end_count != items_start_count - how_many_to_delete:
            raise ValueError()

    except ValueError as e:
        result = "failed"
        print("Test C nieudany")

    except Exception as e:
        result = "failed"
        print("W tescie C wystapil wyjatek " + str(type(e)))

    print("Test C sie zakonczyl")
    return result

def testEFGH(driverE, source):
    result = ["failed", "failed", "failed", "failed"]

    #TEST E------------------------------------------------------------------------------

    print("Test E sie rozpoczyna")
    try:
        driverE.get(source)
        WebDriverWait(driver=driverE, timeout=5).until(
            EC.presence_of_element_located((By.ID, "main"))
        )

        driverE.find_element(By.XPATH,
                             "//section[@id='main']//div[@class='card cart-summary']//div[@class='checkout cart-detailed-actions card-block']/div/a").click()

        WebDriverWait(driver=driverE, timeout=5).until(
            EC.presence_of_element_located((By.ID, "content"))
        )

        #first form

        di_first_stage = driverE.find_element(By.ID, "checkout-personal-information-step")

        necessary_customer_form_rows = di_first_stage.find_elements(By.XPATH, ".//form[@id='customer-form']/section/div")
        tos_check = necessary_customer_form_rows[-1].find_element(By.NAME, "agreement_1")
        first_stage_name = necessary_customer_form_rows[1].find_element(By.XPATH, ".//input[@class='form-control']")
        first_stage_surname = necessary_customer_form_rows[2].find_element(By.XPATH, ".//input[@class='form-control']")
        first_stage_mail = necessary_customer_form_rows[3].find_element(By.XPATH, ".//input[@class='form-control']")
        first_stage_button = di_first_stage.find_element(By.XPATH, ".//form[@id='customer-form']/footer/button")

        driverE.execute_script("arguments[0].scrollIntoView();", tos_check)
        driverE.execute_script("window.scrollBy(0, -100);")
        WebDriverWait(driver=driverE, timeout=5).until(
            EC.element_to_be_clickable(tos_check.find_element(By.XPATH, "../span"))
        )
        tos_check.find_element(By.XPATH, "../span").click()

        driverE.execute_script("arguments[0].scrollIntoView();", first_stage_name)
        driverE.execute_script("window.scrollBy(0, -100);")
        WebDriverWait(driver=driverE, timeout=5).until(
            EC.element_to_be_clickable(
                first_stage_name)
        )
        first_stage_name.send_keys('A')

        driverE.execute_script("arguments[0].scrollIntoView();", first_stage_surname)
        driverE.execute_script("window.scrollBy(0, -100);")
        WebDriverWait(driver=driverE, timeout=5).until(
            EC.element_to_be_clickable(
                first_stage_surname)
        )
        first_stage_surname.send_keys('A')

        driverE.execute_script("arguments[0].scrollIntoView();", first_stage_mail)
        driverE.execute_script("window.scrollBy(0, -100);")
        WebDriverWait(driver=driverE, timeout=5).until(
            EC.element_to_be_clickable(
                first_stage_mail)
        )
        first_stage_mail.send_keys('A@gmail.com')

        driverE.execute_script("arguments[0].scrollIntoView();", first_stage_button)
        driverE.execute_script("window.scrollBy(0, -100);")
        WebDriverWait(driver=driverE, timeout=5).until(
            EC.element_to_be_clickable(
                first_stage_button)
        )
        first_stage_button.click()

        #second form

        WebDriverWait(driver=driverE, timeout=5).until(
            EC.presence_of_element_located((By.ID, "checkout-addresses-step"))
        )

        di_second_stage = driverE.find_element(By.ID, "checkout-addresses-step")
        try:
            driverE.find_element(By.XPATH, ".//a[contains(text(), 'dodaj nowy adres')]")
        except NoSuchElementException as e:
            necessary_second_stage_rows = driverE.find_elements(By.XPATH, "//div[@id='delivery-address']/div/section/div")
            second_stage_address = necessary_second_stage_rows[4].find_element(By.XPATH, ".//input[@class='form-control']")
            second_stage_postcode = necessary_second_stage_rows[6].find_element(By.XPATH, ".//input[@class='form-control']")
            second_stage_city = necessary_second_stage_rows[7].find_element(By.XPATH, ".//input[@class='form-control']")
            second_stage_phone = necessary_second_stage_rows[9].find_element(By.XPATH, ".//input[@class='form-control']")

            driverE.execute_script("arguments[0].scrollIntoView();", second_stage_address)
            driverE.execute_script("window.scrollBy(0, -100);")
            WebDriverWait(driver=driverE, timeout=5).until(
                EC.element_to_be_clickable(second_stage_address)
            )
            second_stage_address.send_keys('ul. Narutowicza 13')

            driverE.execute_script("arguments[0].scrollIntoView();", second_stage_postcode)
            driverE.execute_script("window.scrollBy(0, -100);")
            WebDriverWait(driver=driverE, timeout=5).until(
                EC.element_to_be_clickable(second_stage_postcode)
            )
            second_stage_postcode.send_keys('80-233')

            driverE.execute_script("arguments[0].scrollIntoView();", second_stage_city)
            driverE.execute_script("window.scrollBy(0, -100);")
            WebDriverWait(driver=driverE, timeout=5).until(
                EC.element_to_be_clickable(second_stage_city)
            )
            second_stage_city.send_keys('Gdańsk')

            driverE.execute_script("arguments[0].scrollIntoView();", second_stage_phone)
            driverE.execute_script("window.scrollBy(0, -100);")
            WebDriverWait(driver=driverE, timeout=5).until(
                EC.element_to_be_clickable(second_stage_phone)
            )
            second_stage_phone.send_keys('123456789')



        second_stage_button = di_second_stage.find_element(By.XPATH, ".//button[contains(text(), 'Dalej')]")
        driverE.execute_script("arguments[0].scrollIntoView();", second_stage_button)
        driverE.execute_script("window.scrollBy(0, -100);")
        WebDriverWait(driver=driverE, timeout=5).until(
            EC.element_to_be_clickable(
                second_stage_button)
        )
        second_stage_button.click()


        '''
        
        #TEST G-------------------------------------------------------------------------------
        
        print("Test G sie rozpoczyna")

        WebDriverWait(driver=driverE, timeout=5).until(
            EC.presence_of_element_located((By.ID, "checkout-delivery-step"))
        )

        di_third_stage = driverE.find_element(By.ID, "checkout-delivery-step")
        #needs to be changed when mock delivery options implemented
        third_stage_delivery = di_third_stage.find_element(By.XPATH, ".//input[@id='delivery_option_65']/../span")
        third_stage_button = di_third_stage.find_element(By.XPATH, ".//button[contains(text(), 'Dalej')]")

        driverE.execute_script("arguments[0].scrollIntoView();", third_stage_delivery)
        driverE.execute_script("window.scrollBy(0, -100);")
        WebDriverWait(driver=driverE, timeout=5).until(
            EC.element_to_be_clickable(third_stage_delivery)
        )
        third_stage_delivery.click()
        #driverE.execute_script("arguments[0].checked = true;", third_stage_delivery)
        
        #dodaj warunek na sprawdzanie czy delivery wybrany poprawnie
        if False:
            raise ValueError("G")

        driverE.execute_script("arguments[0].scrollIntoView();", third_stage_button)
        driverE.execute_script("window.scrollBy(0, -100);")
        WebDriverWait(driver=driverE, timeout=5).until(
            EC.element_to_be_clickable(
                third_stage_button)
        )
        third_stage_button.click()

        result[2] = "passed"
        print("Test G sie zakonczyl")
        
        #TEST F---------------------------------------------------------------------------------------------------
        
        print("Test F sie rozpoczyna")

        WebDriverWait(driver=driverE, timeout=5).until(
            EC.presence_of_element_located((By.ID, "checkout-payment-step"))
            and EC.visibility_of_element_located((By.ID, "checkout-payment-step"))
        )

        di_fourth_stage = driverE.find_element(By.ID, "checkout-payment-step")
        necessary_fourth_stage_forms = di_fourth_stage.find_elements(By.XPATH, "./div/div[@class='payment-options ']/div")
        fourth_stage_payment = necessary_fourth_stage_forms[3].find_element(By.XPATH, "./div/span")
        fourth_stage_conds = driverE.find_element(By.XPATH, ".//form[@id='conditions-to-approve']/span[@class='custom-checkbox']")

        driverE.execute_script("arguments[0].scrollIntoView();", fourth_stage_payment)
        driverE.execute_script("window.scrollBy(0, -100);")
        WebDriverWait(driver=driverE, timeout=5).until(
            EC.element_to_be_clickable(
                fourth_stage_payment)
        )
        fourth_stage_payment.click()
        
        #dodaj warunek czy udało się ustawić poprawny delivery
        if False:
            raise ValueError("F")

        driverE.execute_script("arguments[0].scrollIntoView();", fourth_stage_conds)
        driverE.execute_script("window.scrollBy(0, -100);")
        WebDriverWait(driver=driverE, timeout=5).until(
            EC.element_to_be_clickable(
                fourth_stage_conds)
        )
        fourth_stage_conds.click()
        
        result[1] = "passed"
        print("Test F sie zakonczyl")
        
        #TEST H--------------------------------------------------------------------------------------------
        
        print("Test H sie rozpoczyna")
        
        fourth_stage_button = di_fourth_stage.find_element(By.XPATH, ".//button[contains(text(), 'Zamawiam i płacę')]")
        driverE.execute_script("arguments[0].scrollIntoView();", fourth_stage_button)
        driverE.execute_script("window.scrollBy(0, -100);")
        WebDriverWait(driver=driverE, timeout=5).until(
            EC.element_to_be_clickable(
                fourth_stage_button)
        )
        fourth_stage_button.click() 
        
        #dodaj sprawdzanie czy zamówienie zatwierdzono poprawnie
        if False:
            raise ValueError("H")
            
        result[3] = "passed"
        print("Test H sie zakonczyl")
        '''

        result[0] = "passed"
        print("Test E sie zakonczyl")

    except ValueError as e:
        if str(e) != "E":
            print("Test " + str(e) + " nieudany")
        print("Test E nieudany")

    except Exception as e:
        print("Podczas testow E-H wystapil wyjatek " + str(type(e)))

    return result

if __name__ == '__main__':
    options = Options()
    #commenting the line below show the browser window
    options.add_argument("-headless")
    options.add_argument("-width=1020")
    options.add_argument("-height=680")
    driver = webdriver.Firefox(options=options)
    # ustaw baseAddress i koszykAddress na swój
    baseAddress = "https://monsteriada.pl"
    koszykAddress = "https://monsteriada.pl/koszyk?action=show"
    driver.get(baseAddress)
    driver.set_page_load_timeout(5)

    #uncomment if cookies implemented
    driver.find_element(By.XPATH, "//button[contains(@class, 'x13eucookies__btn--deny')]").click()

    test_results = []

    time_before = time.perf_counter()

    test_results.append(["A", testA(driver, baseAddress)])
    test_results.append(["B", testB(driver, baseAddress)])
    test_results.append(["C", testC(driver, koszykAddress)])
    results_efgh = testEFGH(driver, koszykAddress)
    test_results.append(["E", results_efgh[0]])
    '''
    test_results.append(["F", results_efgh[1]])
    test_results.append(["G", results_efgh[2]])
    test_results.append(["H", results_efgh[3]])
    '''

    time_after = time.perf_counter()
    time_of_testing = time_after - time_before

    for test_result in test_results:
        print("Test " + test_result[0] + " ma rezultat " + test_result[1])
    print("Czas wykonania: " + str(time_of_testing))

    driver.quit()
