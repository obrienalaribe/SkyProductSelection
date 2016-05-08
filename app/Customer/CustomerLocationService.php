<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 5/7/16
 * Time: 12:28 PM
 */

namespace App\Customer;


use App\Exceptions\CustomerNotFoundException;

class CustomerLocationService
{
    protected $customerDataProvider;


    /**
     * CustomerLocationService constructor.
     * @param CustomerDataProviderInterface $customerDataProvider
     */
    public function __construct(CustomerDataProviderInterface $customerDataProvider)
    {
        $this->customerDataProvider = $customerDataProvider;
    }

    public function getLocationIdOfCustomer($customerId)
    {
        $customer = $this->customerDataProvider->getCustomerUsingID($customerId);

        if ($customer) {
            return $customer['Location_Id'];
        }else{
            throw new CustomerNotFoundException();
        }
    }

}