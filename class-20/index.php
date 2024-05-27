
<?php

require "User.php";
require "student.php";

use App\User;

$user = new User();
$user->get();

$user = new School\User();
$user->get();