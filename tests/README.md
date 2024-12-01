# PrestaShop Automated Testing

## Required Config Variables
* `CHROMIUM_BINARY` - Path to Chromium browser binary
* `CHROMEDRIVER_PATH` - Path to ChromeDriver executable
* `PRESTASHOP_URL` - the URL of the PrestaShop instance to test (default: `https://localhost:8443/`)

## Optional Config Variables
* `INTERACTION_SLEEP_TIME` - pause duration between different interactions during the automated testing process

## Running the Tests
To run the tests, install requirements and run:
```bash
python3 test.py
```

## Test Results
- Test logs are saved to `test-results.log`
- Captures the entire user journey from account registration to invoice download
- Logs include detailed information about each step of the process

## Test Workflow
The script performs:
- User account registration
- Product searching 
- Products adding to the cart
- Product removing from the cart
- Order placement
- Delivery method selection
- Payment method selection
- Order status checking
- VAT invoice download