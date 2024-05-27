<?php

class student{
    public string $name;
    public  $roll;

    function getName(): string
    {
        return $this->name;
    }

    function getroll(): ?int
    {
        return $this->roll;
    }


    function display():void
    {
        echo"this name is:".$this->getName()."<br/>";
        echo"this roll is:" .$this->getroll()."<br/>"; 
    }
}

$std = new student();
$std->name ="jone doe";
$std->roll =1;
echo $std->getName() ."<br/>";
$std->display();

echo"<br/>";

$std2 = new student();
$std2->name = "mamul hasan";
echo $std2->getName() ."<br/>";
$std2->display();

