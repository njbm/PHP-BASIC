<?php

class Calculator{
    public $number1 =0;     //properties/variable.
    public $number2 =0;     //properties/variable.

    public function Sum()   //method/function
    {
        return 'Result = '.$this->number1+ $this->number2;
    }
}

$object =new Calculator;    //Instance of Calculator Class
$object->number1=5;
$object->number2=20;        //object
echo $object->sum();

echo "<br><br><br>";


//Example 2

class Calculator2
{
    public $number1 = 0;     //properties/variable.
    public $number2 = 0;     //properties/variable.

    public function setNumber1($number)   //method/function
    {
        $this->number1 =$number;       
    }
    public function setNumber2($number)   //method/function
    { 
        $this->number2 =$number;
    }
    
    public function sum()
    {
        return $this->number1+ $this->number2;
    }
    public function sub()
    {
        return $this->number1 - $this->number2;
    }
    public function result()
    {
        return 'Sum =' . $this->sum() . '&nbsp &nbsp &nbsp;'  .  'Sub= '.$this->sub();
    }
}

$calculator =new Calculator2;

$calculator->setNumber1(10);
$calculator->setNumber2(5);

echo 'Calculate Result :  ' . $calculator->result();


