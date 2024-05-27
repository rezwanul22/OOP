<?php

class User 
{
    public $name ="Rezwan";
    public static $message="This is massage";

    public function display()

    {
        echo" Name is {$this->name} <br/>";
        echo"Message is :".self::$message."<br/>";
    }

}

User::$message="This is new Message";

$user = New User();
$user->name="Rakib";
$user->display();

$user2 = new User();
$user->name="Big show";
$user->display();