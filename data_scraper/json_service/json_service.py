import json
import os

from constants import *

def json_init() -> dict:
    if not os.path.exists(CATEGORIES_FILEPATH) or os.path.getsize(CATEGORIES_FILEPATH) == 0:
        with open(CATEGORIES_FILEPATH, mode="w", encoding="utf-8") as file:
            json.dump({}, file)

    with open(CATEGORIES_FILEPATH, mode="r", encoding="utf-8") as file:
        json_data = json.load(file)
    return json_data

def append_to_json(data: dict) -> None:
    with open(CATEGORIES_FILEPATH, mode="w", encoding="utf-8") as file:
        json.dump(data, file, ensure_ascii=False, indent=4)
