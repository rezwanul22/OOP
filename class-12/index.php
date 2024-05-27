<?php
class User 
{
    const MASSAGE =" Welcome to User class";
     
    public $name ="rezwan";

    
   public function display()
   {
    //   echo $this->name;
    // echo self::MASSAGE;
       echo User::MASSAGE;

   }
    
}



echo User::MASSAGE;

echo"<br/>";
$user =new User();
$user->display();



?>
