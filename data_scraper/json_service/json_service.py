import json
import os

from constants import *

def json_init(file_path: str) -> dict:
    if not os.path.exists(file_path) or os.path.getsize(file_path) == 0:
        with open(file_path, mode="w", encoding="utf-8") as file:
            print(f"Creating new {file_path} file")
            json.dump({}, file)

    with open(file_path, mode="r", encoding="utf-8") as file:
        json_data = json.load(file)
    return json_data

def append_to_json(data: dict, file_path) -> None:
    with open(file_path, mode="w", encoding="utf-8") as file:
        json.dump(data, file, ensure_ascii=False, indent=4)
