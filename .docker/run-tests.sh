#!/bin/bash

cd /opt/php-fizzbuzz
curl -sS https://getcomposer.org/installer | php
php composer.phar install
vendor/bin/codecept run
