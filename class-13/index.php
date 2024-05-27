<?php
class User
{
    public static $message = "Hellow world";

    public function display()
    {
        echo User::$message ."<br/>";
        echo self::$message ."<br/>";
    }


}

echo User::$message;
User::$message ="This is new message";

echo"<br/>";

echo User::$message;

echo"<br/>";

$user =new User();
$user->display();