from scraper_service.scraper_service import *


def main() -> None:
    json_data = json_init()
    fetch_categories(json_data)
    fetch_subcategories(json_data)





if __name__ == '__main__':
    main()
