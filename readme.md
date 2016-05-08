# Customer Product Selection App

## Get Started

- Install project dependencies by running ```composer install```

- Next create environment keys by running ```php artisan key:generate```

## Starting the application

- start the server with ```php artisan serve```

- Visit ```http://localhost:8000/``` to view the app


## Running tests suites

-- run unit tests with ```vendor/bin/codecept run unit```

- run integration test: ```vendor/bin/codecept run integration```

## Acceptance Testing

- Acceptance Test will run on firefox. To run you will need to start up selenium with this command
```java -jar selenium-server-standalone-2.53.0.jar```

To stop selenium server from the browser you can visit
```http://localhost:4444/selenium-server/driver/?cmd=shutDownSeleniumServer``` on your browser


##Updating the cookie for customer ID

- You can set the customer ID in ProductController. Use ```123``` for a liverpool customer and ```321``` for london customer


##Running all tests:

- You can run all test suites with ```vendor/bin/codecept run```

## Source code folders:
-Customer Module: app/Customer
-Product Module: app/Product
-Exceptions: app/Exceptions
-Controller: app/Http/Controllers (update customerId cookie here)
