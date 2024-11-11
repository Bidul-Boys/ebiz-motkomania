#!/bin/bash

# Wczytanie zmiennych z pliku .env (jeśli istnieje)
if [ -f .env ]; then
  source .env
fi

# Ustawienia bazy danych
DB_CONTAINER=ebiz-mysql
DB_USER=${DB_USER}
DB_PASSWD=${DB_PASSWD}
DB_NAME=prestashop
DUMP_FILE=prestashop_dump.sql

# Sprawdzenie, czy zmienne środowiskowe DB_USER i DB_PASSWD są ustawione
if [ -z "$DB_USER" ] || [ -z "$DB_PASSWD" ]; then
  echo "Brak ustawionych zmiennych środowiskowych DB_USER lub DB_PASSWD."
  exit 1
fi

# Wykonanie dumpa
echo "Wykonywanie dumpa bazy danych '$DB_NAME'..."
docker exec $DB_CONTAINER sh -c "exec mysqldump -u$DB_USER -p$DB_PASSWD $DB_NAME" > $DUMP_FILE

if [ $? -eq 0 ]; then
  echo "Dump zapisany w pliku $DUMP_FILE"
else
  echo "Wystąpił błąd podczas wykonywania dumpa bazy danych."
  exit 1
fi