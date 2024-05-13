#!/bin/bash

echo "::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::"
echo "Welcome to 'Test database reset' started at $(date +"%T %d/%m/%Y")"
echo "··········································································································"
echo ""
php bin/console cache:clear --env=test
php bin/console doctrine:database:drop --force --env=test
php bin/console doctrine:database:create --env=test
php bin/console doctrine:schema:update --complete --force --env=test
php bin/console hautelook:fixtures:load --no-interaction --env=test
#php bin/console assets:install public --env=test
#php bin/console sass:build --env=test
#php bin/console asset-map:compile --env=test
echo ""
echo "··········································································································"
echo "EOF finished at $(date +"%T %d/%m/%Y")"
echo "::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::"
