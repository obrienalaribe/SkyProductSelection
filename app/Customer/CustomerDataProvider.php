<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 5/7/16
 * Time: 1:54 AM
 */

namespace App\Customer;


class CustomerDataProvider implements CustomerDataProviderInterface
{

    /**
     * Retrieve a customer's location
     * @param $customerID
     * @return array
     */
    public function getCustomerUsingID($customerID)
    {
        foreach ($this->getAllCustomers() as $customer) {
            if ($customer['Customer_Id'] == $customerID) {
                return $customer;
            }
        }
        return null;
    }

    private function getAllCustomers(){
        return [
            array(
                'Customer_Id' => 123,
                'Location_Id' => 'LIVERPOOL',
            ),
            array(
                'Customer_Id' => 321,
                'Location_Id' => 'LONDON',
            ),
            array(
                'Customer_Id' => 231,
                'Location_Id' => 'LIVERPOOL',
            ),
            array(
                'Customer_Id' => 332,
                'Location_Id' => 'LONDON',
            ),
            array(
                'Customer_Id' => 223,
                'Location_Id' => 'LONDON',
            ),
        ];
    }
}