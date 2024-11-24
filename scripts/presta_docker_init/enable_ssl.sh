#!/bin/bash
docker cp ../../cert/localhost.crt ebiz-prestashop:/etc/ssl/certs/localhost.crt
docker cp ../../cert/localhost.key ebiz-prestashop:/etc/ssl/private/localhost.key

docker exec ebiz-prestashop sh -c "a2enmod ssl"
docker exec ebiz-prestashop sh -c "service apache2 restart"
sleep 10
docker exec ebiz-prestashop sh -c "a2ensite default-ssl"
docker exec ebiz-prestashop sh -c "service apache2 restart"