<?php

class PropertyMethod{
    // property
    public $property1 = "nilai default";
    public $property2;

    // method
    public function method() {
        return 'Hello World!';
    }
};

$newObject = new PropertyMethod();
$newObject->property1 = 'nilai default akan ditimpa sama ini';
$newObject->property2 = 'cara mengisi property2 (tidak disarankan)';

var_dump($newObject);
echo'<br>';
var_dump($newObject->method());