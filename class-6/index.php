<?php

class Student{
    public $name;
    public $roll;


    function __construct(string $name, int $roll=10)
    {
        $this->name = $name;
        $this->roll = $roll;
    }

    function display():void
    {
        echo"Name is {$this->name}";
        echo"Roll is: {$this->roll}";
    }

    function __destruct()
    {
        echo" <br/> All work is done";
    }
}

$std = new Student("jone Sina", 18);
$std->display();

echo"<br/>";

$std2 = new Student( "Mamul Ssarker" );
$std2->display();