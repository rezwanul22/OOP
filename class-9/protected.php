<?php
 /**
  * User class
  */
  class User
   {
    protected  $name ="Rezwan";

    protected  $roll = 12; 


    public function display()
    {
        echo"Name is : {$this->name} <br/>";
        echo"Roll is : {$this->roll} <br/>";
    }

   }

   class student extends User
   {
      public function set(): void
      {
        $this->name = "Rakib";
        $this->roll= 10;
      } 

   }

   $std = new student();
   $std->set();
  $std->display();