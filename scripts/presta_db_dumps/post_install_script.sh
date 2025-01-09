#!/bin/bash

echo "Loading database dump"
mysql -u"$DB_USER" -p"$DB_PASSWD" -h"$DB_SERVER" "$DB_NAME" < /tmp/sql/prestashop_dump.sql


echo "Updating urls in database"
mysql -u"$DB_USER" -p"$DB_PASSWD" -h"$DB_SERVER" -e "UPDATE ps_configuration SET value = \"$PS_DOMAIN\" WHERE name LIKE \"%SHOP_DOMAIN%\"" "$DB_NAME" 
mysql -u"$DB_USER" -p"$DB_PASSWD" -h"$DB_SERVER" -e "UPDATE ps_shop_url SET domain = \"$PS_DOMAIN\", domain_ssl = \"$PS_DOMAIN\" WHERE id_shop = 1" "$DB_NAME" 