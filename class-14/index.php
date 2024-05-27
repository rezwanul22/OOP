<?php
class User 
{
    public $name = "jone Doe";
     
    public static function display()
    {
        echo"Welcome to User Class <br/>";
    }
}

User::display();

// $user = new User();
// $user->display();