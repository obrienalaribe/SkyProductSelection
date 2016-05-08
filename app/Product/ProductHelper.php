<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 5/7/16
 * Time: 10:42 PM
 */

namespace App\Product;


class ProductHelper
{
    private $products;

    /**
     * ProductHelper constructor.
     * @param $products
     */
    public function __construct($products)
    {
        $this->products = collect($products);
    }


    public function filterByCategory($category)
    {
        $filteredProducts = $this->products->filter(function ($product) use(&$category) {
            if ($product['Category'] == $category) {
                return $product;
            }
        });

        return $filteredProducts;

    }

}