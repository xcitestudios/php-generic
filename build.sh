#!/bin/bash

git clone https://github.com/xcitestudios/php-generic.git
cd php-generic
composer install
phing docs
rm -rf ../docs
mv docs ../
cd ../
rm -rf php-generic
