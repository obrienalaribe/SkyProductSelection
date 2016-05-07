<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 5/7/16
 * Time: 1:02 PM
 */

namespace App\Exceptions;


use Psy\Exception\Exception;

class CustomerNotFoundException extends \Exception
{
    protected $message;

    /**
     * CustomerNotFoundException constructor.
     */
    public function __construct()
    {
        $this->message = "There was a problem retrieving the customer information";
    }


}