<?php

interface UserInterface
{
    public function getName();
    public function display();
}
class User implements UserInterface
{
    public $name ="Jhone don";
    public function getName():string
    {
        return $this->name;
    }

    public function display()
    {
        echo"This is display <br/>";
    }
}

$user = new User();
echo $user->getName();
echo"<br/>";
$user->display();
