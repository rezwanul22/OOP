<?php

class A {
    public $name;

}

class B {
    public $name;

}

$obj = new A();
$b = new B;

var_dump($b instanceof B);

if($obj instanceof A ) 
{
    Echo"This is a object of class A";

}
else{
    echo"This is not a object of a class A";
}

echo"<br/>";

$obj = new B();
 
// ! not instanceof of

if( !$obj instanceof A ) 
{
    Echo"This is a object of class A";

}
else{
    echo"This is not a object of a class A";
}


?>