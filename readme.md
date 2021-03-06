# Customer Product Selection App

## Get Started

- Install project dependencies by running ```composer install```

- Next create environment keys by running ```php artisan key:generate```

## Starting the application

- Start the application server with ```php artisan serve```

- Visit ```http://localhost:8000/``` to view the app

## Source code folders:
- Customer Module: app/Customer
- Product Module: app/Product
- Exceptions: app/Exceptions
- Controller: app/Http/Controllers (update customerId cookie here)

## Running tests suites

- Run unit tests with ```vendor/bin/codecept run unit```

- Run integration test with ```vendor/bin/codecept run integration```

## Acceptance Testing

- This test will run on firefox. Start up selenium with this command
```java -jar selenium-server-standalone-2.53.0.jar```

- To stop selenium visit
```http://localhost:4444/selenium-server/driver/?cmd=shutDownSeleniumServer``` on your browser


##Updating the cookie for customer ID

- You can set the customer ID in ProductController. Use ```123``` for a liverpool customer and ```321``` for london customer


##Running all test suites:

- You can run all test suites with ```vendor/bin/codecept run```

