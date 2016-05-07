<?php

use App\Customer\CustomerDataProvider;
use App\Customer\CustomerLocationService;
use App\Exceptions\CustomerNotFoundException;

class CustomerLocationServiceTest extends \PHPUnit_Framework_TestCase
{
    protected $customerLocationService;

    public function testExceptionThrownWithInvalidCustomerId(){
        $customerLocationService = $this->getMock('CustomerLocationService', array('getClass', 'getLocationId'));
        $customerLocationService->method('getLocationId')->willThrowException(new CustomerNotFoundException());
        $this->setExpectedException(CustomerNotFoundException::class, "There was a problem retrieving the customer information");
        $customerLocationService->getLocationId(232);

    }

    public function testGetLocationIdUsingCustomerId()
    {
        $customerLocationService = $this->getMock('CustomerLocationService', array('getClass', 'getLocationId'));
        $customerLocationService->method('getLocationId')->willReturn('LIVERPOOL');
        $this->assertEquals('LIVERPOOL', $customerLocationService->getLocationId(431));
    }
}
