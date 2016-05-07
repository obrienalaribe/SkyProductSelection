<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 5/7/16
 * Time: 1:52 AM
 */

namespace app\Customer;


interface CustomerDataProviderInterface
{
    public function getCustomerUsingID($customerID);
}