<?php

 class User
 {
    public $nmae;
    public $addres;

    public function __construct( string $name, string $address)
    {
        $this->name    =$name;
        $this->address =$address;
    }
     public function display():void
     {
        echo"Name is: {$this->name} <br/>";
        echo"Address is: {$this->address} <br/>";

     }
 }

 class students extends User
 {
     public $roll;

     public function __construct(string $name, string $addres, int $roll)
     {
        parent::__construct($name, $addres);
        $this->roll = $roll;
     }

     public function getroll():int
     {
        return $this->roll;
     }
 }

 $std = new students("jone","Dhaka",100);
 $std->display();
 echo $std->getroll();



?>