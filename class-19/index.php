<?php

trait User 
{
    public function get()
    {
        echo"Weclome to User Trait.<br/>";
    }
}

trait Sesson 
{
    public function showSesson()
    {
        echo"Welcome to sesson trait.<br/>";
    }
}

class Student
{
    use User, Sesson;
}

$std = new Student();
$std->get();
$std->showSesson();