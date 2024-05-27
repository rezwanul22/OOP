<?php

class student {
    private $name = "Rezwan";
    public $roll=12;

    public function setName(string $name):void
    {
        $this->name =$name;
    }
     
    function display ()
    {
        echo"Student Name is : {$this->name}<br/>";
        echo"Student Roll is : {$this->roll}<br/>";
        $this->test();
        $this->hellow();
    }

    private function test()
   {
       echo"welcome to test <br/>";

    }

    public function hellow()
    {
        echo"welcome tto helloow function<br/>";
    }
}



$std = new student();
// $std->name="rezwanul";
// echo $std->name;
$std->setName("wotson");
$std->roll=10;
$std->display();