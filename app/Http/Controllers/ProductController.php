<?php

namespace App\Http\Controllers;

use App\Customer\CustomerDataProvider;
use App\Customer\CustomerLocationService;
use App\Product\Catalogue\CatalogueService;
use App\Product\ProductHelper;
use Illuminate\Cookie\CookieJar;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    private $catalogueService;
    private $customerID;

    /**
     * ProductController constructor.
     */
    public function __construct(CatalogueService $catalogueService, Request $request)
    {
        $this->catalogueService = $catalogueService;
        $this->customerID = 321;
    }

    /**
     * Handle Product Selection
     */
    public function index(CustomerLocationService $customerLocationService)
    {

        $locationId = $customerLocationService->getLocationIdOfCustomer($this->customerID);
        $products = $this->catalogueService->getProductsByLocation($locationId);

        $productHelper = new ProductHelper($products);
        $sportsProducts = $productHelper->filterByCategory('Sports');
        $newsProducts = $productHelper->filterByCategory('News');

        return response()->view('product.index', compact('sportsProducts', 'newsProducts'))->withCookie('customerId', $this->customerID, 100);
    }

    /**
     * Handle Product Selection Confirmation
     */
    public function confirmation(Request $request)
    {
        $customerId = $request->cookie('customerId');

        $selectedProducts = $request->input('products');

        return view('product.confirmation', compact('selectedProducts', 'customerId'));
    }
}
