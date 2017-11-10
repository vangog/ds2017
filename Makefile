#!/usr/bin/make -f

NAME=DS2017
PROFILE=standard
PASS=password

APP=$(shell pwd)/app

init:
	composer install --prefer-dist --no-progress

install: init
	drush site-install -y --site-name=$(NAME) --account-pass=$(PASS) $(PROFILE)
	chown -R www-data:www-data $(APP)
