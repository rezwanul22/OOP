<?php

use student as GlobalStudent;

class User{
    public $name = "jone doe";
    
    function display():void
    {
        echo"This is a user.<br/>";
    }
}

class SchoolUser extends User{
    function school()
    {
        echo"Welcome to our School.<br/>";
    }
}

class Students extends SchoolUser{
    function name(){

        echo" This is a student name.<br/>";
    }
}

$std = new Students();
$std->display();
$std->school();
$std->name();
echo $std->name;