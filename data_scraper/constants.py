import pathlib

#TODO - change to relative paths with pathlib!! not using strings
BASE_URL: str = "https://motkomania.pl"
CATEGORIES_FILEPATH: str = "data/categories_and_subs.json"
PRODUCTS_FILEPATH: str = "data/products.json"


CATEGORIES_TO_FETCH: dict = {
    "Włóczki wg rodzaju włókna": ["wełna", "bawełna"],
    "Kołowrotki i akcesoria": ["Kołowrotki", "Części i akcesoria"],
    "Krosna i akcesoria": ["Krosna", "Akcesoria i i części"],
    "Druty i akcesoria": ["Addi", "Clover"]
}