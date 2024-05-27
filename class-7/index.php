<?php

class Vehicle{
    public $brand;


    function display():void
    {
        echo"This is vehicle <br/>";
    }
}

class Car extends Vehicle{
    function test ():void
    {
        echo"This is test function <br/>";
    }
}

$car = new Car(); 
$car->display();
$car->test(); 
$car->brand ="BWM";
echo $car->brand;