<?php

use App\Product\Catalogue\CatalogueDataProvider;
use App\Product\Catalogue\CatalogueService;

class CatalogueServiceTest extends \PHPUnit_Framework_TestCase
{
    protected $catalogueService;


    protected function setUp()
    {
        $this->catalogueService = new CatalogueService(new CatalogueDataProvider());
    }

    public function testGetBasicProductsWithProductsByLocation()
    {
        $productsInLondon = $this->catalogueService->getProductsByLocation('LONDON');
        $this->assertCount(4, $productsInLondon);

        $productsInLiverpool = $this->catalogueService->getProductsByLocation('LIVERPOOL');
        $this->assertCount(3, $productsInLiverpool);
    }

}
