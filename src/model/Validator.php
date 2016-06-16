 <?php

namespace shankarbala33\php-validation;


/**
 * Class Validator
 * @package StorePress\Helper
 */
class Validator
{
 
 /**
     * To Validates the input with the given rules
     *
     * @param object $http of post data
     * @param array $rules set of to check with the data
     * @return array of result of validation
     */
    public static function validate($http, $rules)
    {
        $error = array();
        foreach ($rules as $key => $rule) {
            if ($rule == 'Required') {
                if (!$http->has($key)) {
                    $error[$key] = $rule;
                }
            }
        }
        return $error;
    }
