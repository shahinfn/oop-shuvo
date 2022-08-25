<?php

/*
There is 2 part in Encapsulation.
1. Interface
2. Abstraction
*/
interface DeviceInterface{
    public function build();
}

abstract class DeviceClass{
    protected $amount;
    abstract public function build();
    public function sayHello(){
        echo $this->amount.' tmi paba';
    }
}

class useAbstract extends DeviceClass{
    public function todo(){
        $this->amount = 10000;
    }
    public function build(){
        echo $this->amount;
    }
}

$obj = new useAbstract();
$obj->todo();
$obj->build();
$obj->sayHello();

class MakPC implements DeviceInterface
{
    public function build()
    {
        return 5000;
    }
}

class MakLaptop implements DeviceInterface
{
    public function build()
    {
        return 2000;
    }
}

class MakPhone implements DeviceInterface
{
    public function build()
    {
        return 3000;
    }
}

class MakTab{
    public function build()
    {
        return 3000;
    }
}

class Calculate{
    private $devices = []; 
    public function __construct(array $devices){
        $this->devices = $devices;
    }
    public function calculateCost(){
        
        $sum = 0;
        for($i=0;$i<count($this->devices);$i++){
            $sum += $this->devices[$i]->build();
        }
        echo $sum;
    }
}

class CalculateTax{
    private $device; 
    public function __construct(DeviceInterface $device){
        $this->device = $device;
    }
    public function totalTax(){
        echo $this->device->build() * 0.5;
    }
}



$allDevice = [new MakPC(), new MakPhone(), new MakLaptop(),new MakTab()];
$cal = new Calculate($allDevice);
$cal->calculateCost();

$tax = new CalculateTax(new MakPC());
$tax1 = new CalculateTax(new MakPhone());
$tax->totalTax();
echo "\n";
$tax1->totalTax();