<?php

namespace shankarbala33\php-validation;


/**
 * Class Rules for Manage Rules for Different Forms
 * @package StorePress\Helper
 */
class Rules
{
    public static function customer_address()
    {
        return [
            'fname' => 'Required',
            'lname' => 'Required',
            'mobile' => 'Required',
            'address1' => 'Required',
            'address2' => 'Required',
            'city' => 'Required',
            'zipcode' => 'Required',
            'country' => 'Required'
        ];
    }

}
