<?php
/**
 * Created by OBrien Alaribe.
 */

namespace App\Product\Catalogue;


class CatalogueDataProvider implements CatalogueDataProviderInterface
{
    static $productCollection;

    public function getProductsByLocation($locationID)
    {
        $filteredResults = null;
        foreach ($this->getAllProducts() as $product) {
            if ($product['Location_Id'] == $locationID || $product['Basic_Product']) {
                $filteredResults[] = $product;
            }
        }
        return $filteredResults;
    }

    private static function getAllProducts(){
        return [
            array(
                'Category' => 'Sports',
                'Product' => 'Arsenal TV',
                'Location_Id' => 'LONDON',
                'Basic_Product' => false
            ),
            array(
                'Category' => 'Sports',
                'Product' => 'Chelsea TV',
                'Location_Id' => 'LONDON',
                'Basic_Product' => false
            ),
            array(
                'Category' => 'Sports',
                'Product' => 'Liverpool TV',
                'Location_Id' => 'LIVERPOOL',
                'Basic_Product' => false
            ),
            array(
                'Category' => 'News',
                'Product' => 'Sky News',
                'Location_Id' => null,
                'Basic_Product' => true
            ),
            array(
                'Category' => 'News',
                'Product' => 'Sky Sports News',
                'Location_Id' => null,
                'Basic_Product' => true
            ),
        ];
    }
}

