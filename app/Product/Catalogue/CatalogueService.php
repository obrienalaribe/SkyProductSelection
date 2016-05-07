<?php
/**
 * Created by OBrien Alaribe.
 */

namespace App\Product\Catalogue;

class CatalogueService
{
    protected $catalogueService;

    /**
     * CatalogueService constructor.
     */
    public function __construct(CatalogueDataProviderInterface $catalogueDataProvider)
    {
        $this->catalogueDataProvider = $catalogueDataProvider;
    }

    public function getProductsByLocation($locationID){
        return $this->catalogueDataProvider->getProductsByLocation($locationID);
    }
}