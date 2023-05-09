<?php

class Calculator{
    public $number1 =0;     //properties/variable.
    public $number2 =0;

    public function Sum()   //method/function
    {
        return 'Result = '.$this->number1+ $this->number2;
    }
}

$object =new Calculator;    //Instance of Calculator Class
$object->number1=5;
$object->number2=20;        //object
echo $object->sum();