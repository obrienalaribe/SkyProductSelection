<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 5/7/16
 * Time: 1:54 AM
 */

namespace app\Customer;


class CustomerDataProvider implements CustomerDataProviderInterface
{

    public function getCustomerLocationID($customerID)
    {
        //TODO: Customer not found exception
    }

    private function getAllCustomers(){
        return [
            array(
                'Customer_Id' => '123',
                'Location_Id' => 'LIVERPOOL',
            ),
            array(
                'Customer_Id' => '321',
                'Location_Id' => 'LONDON',
            ),
            array(
                'Customer_Id' => '231',
                'Location_Id' => 'LIVERPOOL',
            ),
            array(
                'Customer_Id' => '332',
                'Location_Id' => 'LONDON',
            ),
            array(
                'Customer_Id' => '223',
                'Location_Id' => 'LONDON',
            ),
        ];
    }
}