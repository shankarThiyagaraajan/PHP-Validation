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
     
     
### License

MIT
