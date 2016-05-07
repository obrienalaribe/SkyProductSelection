<?php

namespace App\Http\Controllers;

use App\Product\Catalogue\CatalogueDataProvider;
use App\Product\Catalogue\CatalogueService;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    /**
     * Handle Product Selection page
     */
    public function index(){

        $productCollection = new CatalogueService(new CatalogueDataProvider());

        dd($productCollection->getProductsByLocation('LIVERPOOL'));
        return view('product.index');
    }
}
