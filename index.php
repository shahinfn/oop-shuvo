<?php

class Calc{
    private $num1,$num2;
    // public function __construct($a,$b){
    //   $this->num1 = $a;
    //   $this->num2 = $b;
    // }
    public function plus(){
        $result = $this->num1 + $this->num1;
        return $result;
    }
    public function minus(){
        $result = $this->num1 - $this->num2;
        return $result;
    }
    public function setNum1($val){
        $this->num1 = $val;
    }
    public function setNum2($val){
        $this->num2 = $val;
    }

    public function getNum1(){
        return $this->num1;
    }
    public function getNum2(){
        return $this->num2;
    }
}

$object = new Calc();
$object->setNum1(10);
$object->setNum2(2);

echo $object->getNum1();
echo "\n";
echo $object->getNum2();
echo "\n";

echo $object->plus();
echo "\n";
echo $object->minus();
