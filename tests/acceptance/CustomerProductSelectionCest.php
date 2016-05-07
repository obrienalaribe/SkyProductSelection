<?php


use App\Pages\ProductSelectionPage;

class CustomerProductSelectionCest
{
    private $customerId = '123';

    public function _before(AcceptanceTester $I)
    {
    }

    public function selectProductsInHomeLocation(AcceptanceTester $I)
    {
        $I->wantTo('Ensure a customer can select products based on home location');
        $this->givenACustomerWithCookie($I);
        $this->WhenTheyVisitTheProductSelectionPage($I);
        $I->canSeeInFormFields('#product-form', [
            ProductSelectionPage::$arsenalTvElement => false,
            ProductSelectionPage::$chelseaTvElement => false,
            ProductSelectionPage::$liverpoolTvElement => false,
            ProductSelectionPage::$skyNewsElement => false,
            ProductSelectionPage::$skySportsElement => false,
        ]);

        $I->checkOption(ProductSelectionPage::$arsenalTvElement);

        $I->canSeeInFormFields('#product-form', [
            ProductSelectionPage::$arsenalTvElement => true,
            ProductSelectionPage::$chelseaTvElement => false,
            ProductSelectionPage::$liverpoolTvElement => false,
            ProductSelectionPage::$skyNewsElement => false,
            ProductSelectionPage::$skySportsElement => false,
        ]);


//        $I->click('Checkout');


    }

    private function WhenTheyVisitTheProductSelectionPage(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeInTitle('Sky- Product Selection');
        $I->seeCurrentUrlEquals('/');
    }


    public function _after(AcceptanceTester $I)
    {
    }

    private function givenACustomerWithCookie($I)
    {
        $I->setCookie('customerID', $this->customerId);
        $I->seeCookie('customerID');
    }


}
