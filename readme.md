# Customer Product Selection App

## Get Started

- run ```composer install```

php artisan key:generate

start the application server:

php artisan serve

Visit: http://localhost:8000/


## Running tests suites

run unit tests: ./vendor/bin/codecept run unit

run integration test: ./vendor/bin/codecept run integration

## Webpage Testing

Test will run on firefox. To run acceptance test you need to start up selenium with this command:
java -jar selenium-server-standalone-2.53.0.jar

To stop selenium server from the browser use:
http://localhost:4444/selenium-server/driver/?cmd=shutDownSeleniumServer

To update the cookie for customer ID you can set this value in ProductController //123 for liverpool customer and 321 for london


run all tests: ./vendor/bin/codecept run

## Source code folders:

Customer Module: app/Customer
Product Module: app/Product
Exceptions: app/Exceptions
Controller: app/Http/Controllers (update customerId cookie here)
