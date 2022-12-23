<?php
$server_name="localhost";
$username="root";
$password="";
$dbname="demo_database";

$conn=mysqli_connect($server_name,$username,$password,"$dbname");

if(!$conn){
  die('Connection could not found'.mysql_error());
}
else {
//  echo "Connection Established";
}
 ?>
