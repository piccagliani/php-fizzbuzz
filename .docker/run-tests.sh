#!/bin/bash

cd /opt/php-fizzbuzz
composer install
vendor/bin/codecept run
