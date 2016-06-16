<?php
namespace shankarbala33\php-validation\Controller;

class Form{

public function checker(Http $http){

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
