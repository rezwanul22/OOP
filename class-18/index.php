<?php
interface A
{
    public function get();
}

interface B
{
  public function show();

}
class User implements A, B
{
   public function get()
   {
     echo"This is get Function <br/>";
   }

   public function show()
   {
     echo"This is show function <br/>";
   }
}

$user = new User();
$user->get();

