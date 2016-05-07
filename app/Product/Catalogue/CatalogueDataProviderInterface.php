<?php

/**
 * Created by OBrien Alaribe.
 */

namespace App\Product\Catalogue;

interface CatalogueDataProviderInterface
{
    public function getProductsByLocation($locationID);
}