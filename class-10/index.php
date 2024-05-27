<?php

class User
{
    public $name;
    public $address;


    public function set(string $name, string $address)
    {
        $this->name     =$name;
        $this->address  =$address;
    }

    function display()
    {
        echo"Name is :{$this->name}<br/>";
        echo"Address is :{$this->address}<br/>";
        echo"Good Bye <br/>";

    }
}

class students extends User
{   
    public $roll;

    public function set (string $name, string $address, int $roll=null ):void
    {
        parent::set($name, $address);
        $this->roll = $roll;
    }

    function display()
    {   
        echo"Student information <br/>";
         echo"Roll is :{$this->roll}<br/>";
        parent::display();

    }
   
}

class Teacher extends User
{ 
    function display()
    {   
        echo"Teacher information <br/>";
        parent::display();


    }

}

$std = new students();
$std->set("Jone" ,"Dhaka" ,10);
$std->display();

echo"<br/>";

$teacher= new Teacher();
$teacher->set("Rakib" ,"Bogra");
$teacher->display();

?>