<?php 

require 'config/constants.php';
 
//connect to the database

$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(mysqli_errno($con)){
   die(mysqli_errno($con));
}

?>