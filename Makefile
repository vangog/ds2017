#!/usr/bin/make -f

NAME=DS2017
PROFILE=standard
PASS=password

APP=$(shell pwd)/app

init:
	composer install --prefer-dist

install:
	drush site-install -y --site-name=$(NAME) --account-pass=$(PASS) $(PROFILE)
	chown -R www-data:www-data $(APP)