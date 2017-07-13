## PHP Validation

PHP library for PHP Validation with simple validation of inputs.

### Installation via Composer

    composer require shankarbala33/php-validation

### Rules to apply
    
    return [
        'fname' => 'Required',
        'age' => 'Required'
      ];
      
### Validation

     //[fname=>'Kumar']
     Form::validate_form($post_data);
     
     //Validation Output.
     ['success'] = false
     ['error'] = ['age']
     
___
#### For Powerful front end validation 
 Try [JavaScript Validator](https://github.com/global-source/javascript_form_validator)
     
### License

MIT
