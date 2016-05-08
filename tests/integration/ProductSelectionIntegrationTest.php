<?php

use App\Customer\CustomerDataProvider;
use App\Customer\CustomerLocationService;
use App\Product\Catalogue\CatalogueDataProvider;
use App\Product\Catalogue\CatalogueService;

class ProductSelectionIntegrationTest extends \Codeception\TestCase\Test
{
    protected $tester;
    protected $catalogueService;
    protected $customerLocationService;


    protected function _before()
    {
        $this->customerLocationService = new CustomerLocationService(new CustomerDataProvider());
        $this->catalogueService = new CatalogueService(new CatalogueDataProvider());
    }

    public function testRetrievingProductCatalogueForCustomerLocation()
    {
        $customerId = $this->givenACustomerWithId(123);
        $locationId = $this->whenWeRetrieveTheLocationOfThisCustomer($customerId);

        $this->assertEquals('LIVERPOOL', $locationId);

        $catogueForLocation = $this->thenWeReceiveAProductCatalogueForTheirLocation($locationId);
        $this->assertCount(3, $catogueForLocation);
    }

    private function givenACustomerWithId($customerId)
    {
       return $customerId;
    }

    private function whenWeRetrieveTheLocationOfThisCustomer($customerId)
    {
        return $this->customerLocationService->getLocationIdOfCustomer($customerId);
    }

    private function thenWeReceiveAProductCatalogueForTheirLocation($locationId)
    {
        return $this->catalogueService->getProductsByLocation($locationId);
    }
}