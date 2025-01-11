import logging
import os
import random
import time
from typing import List

from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.options import Options as ChromeOptions
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.remote.webelement import WebElement
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.common.exceptions import NoSuchElementException, TimeoutException, ElementClickInterceptedException

class Config:
    PRESTASHOP_URL = os.environ.get('PRESTASHOP_URL', "https://localhost:19315")
    PAGE_LOAD_TIMEOUT = 10
    LOG_FILE = 'test-results.log'
    LOG_FORMAT = "%(asctime)s - %(name)s - %(levelname)s - %(message)s"
    CHROMIUM_BINARY = '/usr/bin/chromium-browser'
    CHROMEDRIVER_PATH = '/usr/lib/chromium-browser/chromedriver'
    WINDOW_WIDTH = 1200
    WINDOW_HEIGHT = 700
    INTERACTION_SLEEP_TIME = 0


def setup_logger() -> logging.Logger:
    """Configure and return a logger for the test script."""
    logger = logging.getLogger(__name__)
    logging.basicConfig(
        level=logging.INFO,
        format=Config.LOG_FORMAT,
        filename=Config.LOG_FILE,
        filemode='w'
    )
    return logger

def create_webdriver() -> webdriver.Chrome:
    """Create and configure a Chrome WebDriver instance."""
    options = ChromeOptions()
    options.binary_location = Config.CHROMIUM_BINARY
    options.add_argument("--ignore-certificate-errors")
    options.add_argument("--disable-popup-blocking")

    service = Service(executable_path=Config.CHROMEDRIVER_PATH)
    driver = webdriver.Chrome(service=service, options=options)
    return driver

def wait_for_element(driver: webdriver.Chrome, selector: str, timeout: int = Config.PAGE_LOAD_TIMEOUT) -> WebElement:
    """Wait for an element to be present on the page."""
    try:
        return WebDriverWait(driver, timeout).until(
            EC.presence_of_element_located((By.CSS_SELECTOR, selector))
        )
    except TimeoutException:
        self.logger.error(f"Timeout waiting for element: {selector}")
        raise

# Utility Functions
def generate_random_email() -> str:
    """Generate a random email address."""
    random_number = random.randint(100000, 999999)
    return f"kuba{random_number}@gmail.com"

def find_available_products(driver: webdriver.Chrome) -> List[WebElement]:
    """Find available products on the current page."""
    products = driver.find_elements(By.CSS_SELECTOR, ".js-product")
    return [
        product for product in products
        if not product.find_elements(By.CSS_SELECTOR, ".product-flags .product-flag.out_of_stock")
    ]

def wait_for_payment_status():
    """Wait for manual intervention to change payment status."""
    input("Payment Status Confirmation: Ensure payment is marked as 'Completed' to generate VAT invoice.\nPress ENTER when ready to proceed...")

def retry_click(element: WebElement, logger: logging.Logger, max_attempts: int = 2) -> bool:
    """Attempt to click an element with retries."""
    for attempt in range(max_attempts):
        try:
            element.click()
            return True
        except (ElementClickInterceptedException, Exception) as e:
            if attempt < max_attempts - 1:
                logger.warning(f"Click failed, retrying in 3 seconds... Error: {e}")
                time.sleep(3)
            else:
                logger.error(f"Failed to click element after {max_attempts} attempts: {e}")
                return False
    return False

class PrestaShopTest:
    def __init__(self, driver: webdriver.Chrome, logger: logging.Logger):
        self.driver = driver
        self.logger = logger
        self.driver.set_window_size(Config.WINDOW_WIDTH, Config.WINDOW_HEIGHT)
        self.logger.info("Initialized WebDriver with configured window size")

    def register_account(self):
        """Perform user account registration."""
        try:
            self.driver.get(f"{Config.PRESTASHOP_URL}pl/")
            time.sleep(Config.INTERACTION_SLEEP_TIME)
            self.logger.info("Opening registration page")

            # Click Sign In
            sign_in = self.driver.find_element(By.CSS_SELECTOR, ".user-info > a:nth-child(1) > .hidden-sm-down")
            if not retry_click(sign_in, self.logger):
                raise Exception("Failed to click sign in button")
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            form_data = {
                "#field-id_gender-1": "click",
                "#field-firstname": "Kuba",
                "#field-lastname": "Kubek",
                "#field-email": generate_random_email(),
                "#field-password": "kubek",
                "#field-birthday": "2010-05-10",
                "[name='customer_privacy']": "click",
                "[name='psgdpr']": "click"
            }

            for selector, value in form_data.items():
                element = self.driver.find_element(By.CSS_SELECTOR, selector)
                if value == "click":
                    if not retry_click(element, self.logger):
                        raise Exception(f"Failed to click element: {selector}")
                    time.sleep(Config.INTERACTION_SLEEP_TIME)
                else:
                    element.send_keys(value)
                    time.sleep(Config.INTERACTION_SLEEP_TIME)

            # Submit registration
            submit_btn = self.driver.find_element(By.CSS_SELECTOR, ".form-control-submit")
            if not retry_click(submit_btn, self.logger):
                raise Exception("Failed to click submit button")
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            # Verify registration
            wait_for_element(self.driver, '.account')
            self.logger.info("Account registration successful")

        except Exception as e:
            self.logger.error(f"Registration failed: {e}")
            raise

    def search_product_and_add_to_cart(self):
        """Search for a product and add it to the cart."""
        try:
            self.driver.get(f"{Config.PRESTASHOP_URL}pl/")
            time.sleep(Config.INTERACTION_SLEEP_TIME)
            self.logger.info("Searching for a product")

            # Perform search
            search_input = self.driver.find_element(By.NAME, "s")
            if not retry_click(search_input, self.logger):
                raise Exception("Failed to click search input")
            time.sleep(Config.INTERACTION_SLEEP_TIME)
            search_input.send_keys("alpaca")
            time.sleep(Config.INTERACTION_SLEEP_TIME)
            search_input.send_keys(Keys.ENTER)
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            # Select available product
            available_products = find_available_products(self.driver)
            if available_products:
                product_img = random.choice(available_products).find_element(By.CSS_SELECTOR, "img")
                if not retry_click(product_img, self.logger):
                    raise Exception("Failed to click product image")
                time.sleep(Config.INTERACTION_SLEEP_TIME)

                # Add to cart
                add_to_cart_button = self.driver.find_element(By.CSS_SELECTOR, ".add-to-cart")
                if not retry_click(add_to_cart_button, self.logger):
                    raise Exception("Failed to click add to cart button")
                time.sleep(Config.INTERACTION_SLEEP_TIME)
                self.logger.info("Product added to cart successfully")
            else:
                self.logger.warning("No available products found")

        except Exception as e:
            self.logger.error(f"Search and add to cart failed: {e}")
            raise

    def add_10_products_to_cart(self):
        """Add multiple products to the cart from different categories."""
        try:
            categories = [
                f"{Config.PRESTASHOP_URL}pl/187-druty-i-akcesoria",
                f"{Config.PRESTASHOP_URL}pl/178-wloczki-wg-rodzaju-wlokna"
            ]

            found = 0

            while found < 10:
                # Alternate between categories
                category_url = random.choice(categories)
                self.driver.get(category_url)
                time.sleep(Config.INTERACTION_SLEEP_TIME)

                # Select random page
                total_pages = self._get_total_pages(category_url)
                self.driver.get(f"{category_url}?page={random.randint(1, total_pages)}")
                time.sleep(Config.INTERACTION_SLEEP_TIME)

                # Select and add a random product
                if self._select_and_add_random_product():
                    found += 1



            self.logger.info("Successfully added 10 products to cart")

        except Exception as e:
            self.logger.error(f"Error adding products to cart: {e}")
            raise

    def _get_total_pages(self, category_url: str) -> int:
        """Get total number of pages for a category."""
        self.driver.get(category_url)
        pagination = self.driver.find_elements(By.CSS_SELECTOR, ".pagination a")
        return int(pagination[-2].text) if pagination else 1

    def _select_and_add_random_product(self):
        """Select a random available product and add to cart."""
        available_products = find_available_products(self.driver)
        if available_products:
            # Select a random product
            product = random.choice(available_products)
            product_img = product.find_element(By.CSS_SELECTOR, "img")
            if not retry_click(product_img, self.logger):
                return False
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            # Check if the product is in the last items category

            # Determine quantity
            try:
                quantity_input = self.driver.find_element(By.CSS_SELECTOR, "#quantity_wanted")
                items_quantity = int(self.driver.find_element(By.CSS_SELECTOR, ".product-quantities span[data-stock]").get_attribute("data-stock"))
            except NoSuchElementException:
                return False

            quantity_input.send_keys(Keys.CONTROL + "a")
            quantity_input.send_keys(Keys.DELETE)
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            # Set quantity based on whether it's in the last items category
            quantity = 1 if items_quantity <= 3 else random.randint(1, 2)
            quantity_input.send_keys(str(quantity))
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            # Add to cart
            add_to_cart_button = self.driver.find_element(By.CSS_SELECTOR, ".add-to-cart")
            if not retry_click(add_to_cart_button, self.logger):
                return False
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            return True

    def remove_3_products_from_cart(self):
        """Remove up to three items from the shopping cart."""
        try:
            self.driver.get(f"{Config.PRESTASHOP_URL}pl/koszyk?action=show")
            time.sleep(Config.INTERACTION_SLEEP_TIME)
            self.logger.info("Navigated to cart page")

            cart_items = self.driver.find_elements(By.CSS_SELECTOR, ".cart-item")
            items_to_remove = min(3, len(cart_items))

            for _ in range(items_to_remove):
                remove_button = cart_items[0].find_element(By.CSS_SELECTOR, ".col-md-2 .material-icons")
                if not retry_click(remove_button, self.logger):
                    raise Exception("Failed to click remove button")
                time.sleep(Config.INTERACTION_SLEEP_TIME)
                cart_items = self.driver.find_elements(By.CSS_SELECTOR, ".cart-item")

            self.logger.info(f"Removed {items_to_remove} items from cart")

        except Exception as e:
            self.logger.error(f"Error removing cart items: {e}")

    def execute_order(self):
        """Complete the order process."""
        try:
            # Navigate to cart and proceed to checkout
            self.driver.get(f"{Config.PRESTASHOP_URL}pl/koszyk?action=show")
            time.sleep(Config.INTERACTION_SLEEP_TIME)
            proceed_to_checkout = self.driver.find_element(By.CSS_SELECTOR, ".text-sm-center > .btn")
            if not retry_click(proceed_to_checkout, self.logger):
                raise Exception("Failed to click proceed to checkout button")
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            address_details = {
                "field-address1": "Kolorowa 10",
                "field-postcode": "80-180",
                "field-city": "Gdańsk"
            }

            for field_id, value in address_details.items():
                field = self.driver.find_element(By.ID, field_id)
                field.click()
                time.sleep(Config.INTERACTION_SLEEP_TIME)
                field.send_keys(value)
                time.sleep(Config.INTERACTION_SLEEP_TIME)

            # Confirm address
            confirm_address = self.driver.find_element(By.NAME, "confirm-addresses")
            if not retry_click(confirm_address, self.logger):
                raise Exception("Failed to click confirm address button")
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            self.logger.info("Order details filled successfully")

        except Exception as e:
            self.logger.error(f"Error during order process: {e}")

    def select_delivery_option(self):
        """Randomly select a delivery option."""
        try:
            delivery_options = self.driver.find_elements(By.CSS_SELECTOR, ".delivery-option input[type='radio']")

            if delivery_options:
                # Select a random delivery option
                random_option = random.choice(delivery_options[1:]) if len(delivery_options) > 1 else None

                if random_option:
                    # Only click if a second option is selected
                    time.sleep(Config.INTERACTION_SLEEP_TIME)
                    if not retry_click(random_option, self.logger):
                        raise Exception("Failed to click random delivery option")
                    time.sleep(Config.INTERACTION_SLEEP_TIME)

                # Confirm delivery
                confirm_delivery_button = self.driver.find_element(By.NAME, "confirmDeliveryOption")
                if not retry_click(confirm_delivery_button, self.logger):
                    raise Exception("Failed to click confirm delivery button")
                time.sleep(Config.INTERACTION_SLEEP_TIME)
                self.logger.info("Delivery option selected")
            else:
                self.logger.warning("No delivery options found")

        except Exception as e:
            self.logger.error(f"Error selecting delivery option: {e}")

    def select_payment_method(self):
        """Select payment method."""
        try:
            payment_option = self.driver.find_element(By.ID, "payment-option-2")
            if not retry_click(payment_option, self.logger):
                raise Exception("Failed to click payment option")
            time.sleep(Config.INTERACTION_SLEEP_TIME)
            self.logger.info("Payment method selected")

        except Exception as e:
            self.logger.error(f"Error selecting payment method: {e}")

    def confirm_order(self):
        """Confirm order by agreeing to terms and placing order."""
        try:
            # Agree to terms
            terms_checkbox = self.driver.find_element(By.ID, "conditions_to_approve[terms-and-conditions]")
            if not retry_click(terms_checkbox, self.logger):
                raise Exception("Failed to click terms checkbox")
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            # Confirm order
            confirm_button = self.driver.find_element(By.CSS_SELECTOR, ".ps-shown-by-js > .btn")
            if not retry_click(confirm_button, self.logger):
                raise Exception("Failed to click confirm button")
            time.sleep(Config.INTERACTION_SLEEP_TIME)
            self.logger.info("Order confirmed successfully")

        except Exception as e:
            self.logger.error(f"Error confirming order: {e}")

    def check_order_status(self):
        """Check the status of the latest order."""
        try:
            self.driver.get(f"{Config.PRESTASHOP_URL}pl/moje-konto")
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            account_link = self.driver.find_element(By.CSS_SELECTOR, ".account > .hidden-sm-down")
            if not retry_click(account_link, self.logger):
                raise Exception("Failed to click account link")
            time.sleep(Config.INTERACTION_SLEEP_TIME)
            order_history_link = self.driver.find_element(By.CSS_SELECTOR, "#history-link > .link-item")
            if not retry_click(order_history_link, self.logger):
                raise Exception("Failed to click order history link")
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            details_link = self.driver.find_element(By.LINK_TEXT, "Szczegóły")
            if not retry_click(details_link, self.logger):
                raise Exception("Failed to click details link")
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            self.logger.info("Order details accessed successfully")

        except Exception as e:
            self.logger.error(f"Error checking order status: {e}")

    def download_vat_invoice(self):
        """Login and download VAT invoice."""
        try:
            self.driver.get(f"{Config.PRESTASHOP_URL}pl/")
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            # Navigate to invoice
            account_link = self.driver.find_element(By.CSS_SELECTOR, ".account > .hidden-sm-down")
            if not retry_click(account_link, self.logger):
                raise Exception("Failed to click account link")
            time.sleep(Config.INTERACTION_SLEEP_TIME)
            order_history_icon = self.driver.find_element(By.CSS_SELECTOR, "#history-link .material-icons")
            if not retry_click(order_history_icon, self.logger):
                raise Exception("Failed to click order history icon")
            time.sleep(Config.INTERACTION_SLEEP_TIME)
            download_invoice_icon = self.driver.find_element(By.CSS_SELECTOR, ".text-sm-center > a > .material-icons")
            if not retry_click(download_invoice_icon, self.logger):
                raise Exception("Failed to click download invoice icon")
            time.sleep(Config.INTERACTION_SLEEP_TIME)

            self.logger.info("VAT invoice download initiated")

        except Exception as e:
            self.logger.error(f"Error downloading VAT invoice: {e}")

def main():
    """Main function to run the entire test sequence."""
    logger = setup_logger()

    start_time = time.time()

    try:
        with create_webdriver() as driver:
            test = PrestaShopTest(driver, logger)

            test.register_account()
            test.search_product_and_add_to_cart()
            test.add_10_products_to_cart()
            test.remove_3_products_from_cart()
            test.execute_order()
            test.select_delivery_option()
            test.select_payment_method()
            test.confirm_order()
            test.check_order_status()
            test.download_vat_invoice()

            end_time = time.time()
            total_execution_time = end_time - start_time

            logger.info(f"Total Execution Time: {total_execution_time:.2f} seconds")

    except Exception as e:
        logger.exception('Test sequence failed: %s', e)
        raise

if __name__ == '__main__':
    main()