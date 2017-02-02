<?php
namespace shankarbala33\php-validation\Controller;

class Form{

 /**
  * Array $http List of Form Data.
  */
public static function validate_form($http){

 /** For New Address Validation */
        $error = Validator::validate($http, Rules::customer_address());
        if (!empty($error)) {
            $validation['success'] = false;
            $validation['error'] =$error;
            return (array)$validation;
        }
        $validation['success'] = true;
        
        return $validation;
    }
}
