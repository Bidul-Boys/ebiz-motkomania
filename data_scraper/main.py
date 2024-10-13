from time import sleep

from scraper_service import *

def main() -> None:

    base_url: str = "https://motkomania.pl/pl/c/Wloczki/737"
    for url_counter in range(1, 100):
        get_data(base_url, url_counter)




if __name__ == '__main__':
    main()
