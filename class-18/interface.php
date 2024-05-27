<?php

abstract class A
{
    public abstract function get();
}

abstract class B
{
    public abstract function show();
}
 class User extends A
 {
    public function get()
    {
        echo"This get function of Abstract<br/>";
    }
 }

 $user =new User();
 $user->get();

