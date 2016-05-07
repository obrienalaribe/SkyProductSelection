<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Ensure a customer can select products based on home location');
$I->givenACustomerVisitsTheProductSelectionPage();
$I->seeInFormFields('#news-form', [
        'sky-news' => false,
        'sky-sports' => false,
        'news' => false
    ]
);

