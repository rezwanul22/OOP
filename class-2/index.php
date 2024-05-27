<?php

class Vehicle{

    public $name ="BMW";
    public $color="Red";
    public $price;

 function set($name, $color, $price=2000):void
 
 {

    $this->name = $name;
    $this->color= $color;
    $this->price= $price;
    
 }


 function display():void
 
 {

    echo"name is : {$this->name} <br>";
    echo"name is : {$this->color} <br>";
    echo"price is : {$this->price} <br>";

 }

}


$Vahicale =new Vehicle();

// $Vahicale->name ="bus";
// $Vahicale->color = "Geeen";

$Vahicale->display();

Echo"<br/>";
$Vahicale->set("car","white");
$Vahicale->display();

echo"<br/>";

$Vahicale->set("toyta","Blue",9000);
$Vahicale->display();


// echo"Name is :" . $Vahicale->name. "<br>";
// echo"Color is :" . $Vahicale->color. "<br>";



?>