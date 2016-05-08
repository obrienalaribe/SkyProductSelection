<?php


use App\Pages\ProductSelectionPage;

class CustomerProductSelectionCest
{

    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function selectAllAvailableProducts(AcceptanceTester $I)
    {
        $I->wantTo('Check selected products are in the basket');
        $this->givenACustomerIsOnTheProductSelectionPage($I);

        $this->whenTheCustomerSelectsSomeProducts($I);

        $this->ThenTheirBasketShouldContainTheSelectedProducts($I);


    }

    public function selectAndUnSelectProduct(AcceptanceTester $I)
    {
        $I->wantTo('Check unselected products are removed from the basket');
        $this->givenACustomerHasSelectedSomeProducts($I);

        $this->whenTheyUnselectAProduct($I);

        $this->ThenTheirBasketShouldBeUpdated($I);

    }

    public function selectProductsAndCheckout(AcceptanceTester $I)
    {
        $I->wantTo('Select products and go to the confirmation page');
        $this->givenACustomerHasSelectedSomeProducts($I);

        $this->whenTheCustomerChoosesToCheckout($I);

        $this->ThenTheyAreTakenToTheConfirmationPage($I);

    }

    public function selectedProductsArePostedToConfirmationPage(AcceptanceTester $I)
    {
        $I->wantTo('See all selected products on confirmation page');
        $this->givenACustomerHasSelectedSomeProducts($I);

        $this->whenTheCustomerChoosesToCheckout($I);

        $this->ThenTheCustomerIdIsForwarded($I);
        $this->ThenTheyAreTakenToTheConfirmationPage($I);
        $this->ThenTheyAreShownTheirSelectedProducts($I);

    }

    private function givenACustomerIsOnTheProductSelectionPage(AcceptanceTester $I)
    {
        $I->seeCurrentUrlEquals('/');
        $I->seeInTitle('Sky- Product Selection');
    }


    private function givenACustomerHasSelectedSomeProducts(AcceptanceTester $I)
    {
        $this->whenTheCustomerSelectsSomeProducts($I);
    }

    private function whenTheCustomerSelectsSomeProducts(AcceptanceTester $I)
    {
        $I->checkOption(ProductSelectionPage::$skyNewsCheckbox);
        $I->checkOption(ProductSelectionPage::$skySportsNewsCheckbox);
    }

    private function whenTheyUnselectAProduct(AcceptanceTester $I)
    {
        $I->uncheckOption(ProductSelectionPage::$skyNewsCheckbox);
    }

    private function whenTheCustomerChoosesToCheckout(AcceptanceTester $I)
    {
        $I->click('Checkout');
    }

    private function ThenTheirBasketShouldContainTheSelectedProducts(AcceptanceTester $I)
    {
        $I->waitForElement(ProductSelectionPage::$skySportsNews, 5);
        $I->waitForElement(ProductSelectionPage::$skyNews, 5);
    }

    private function ThenTheirBasketShouldBeUpdated(AcceptanceTester $I)
    {
        $I->dontSeeElementInDOM(ProductSelectionPage::$skyNews);
    }

    private function ThenTheyAreTakenToTheConfirmationPage(AcceptanceTester $I)
    {
        $I->seeCurrentUrlEquals('/confirmation');
        $I->seeInTitle('Sky- Product Confirmation');
    }

    private function ThenTheyAreShownTheirSelectedProducts(AcceptanceTester $I)
    {
        $I->seeElementInDOM(ProductSelectionPage::$skyNews);
        $I->seeElementInDOM(ProductSelectionPage::$skySportsNews);
    }

    private function ThenTheCustomerIdIsForwarded(AcceptanceTester $I)
    {
        $I->seeCookie('customerId');
    }


}
