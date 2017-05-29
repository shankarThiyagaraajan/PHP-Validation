 <?php
namespace shankarbala33\php-validation\model;


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
        // Initiating Error component.
        $error = array();
        // Loop to check error list.
        foreach ($rules as $key => $rule) {
             // Check with "Field" is requierd or not.
            if ($rule == 'Required') {
                // Sanity check with field exist.
                if (!isset($http[$key]) {
                    // To set error element.
                    $error[$key] = $rule;
                }
            }
        }
        return $error;
    }
