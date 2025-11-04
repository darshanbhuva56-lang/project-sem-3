<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="insert";

$connect=mysqli_connect($hostname,$username,$password,$dbname);
if($connect){
    print("database connected");  
}
else{
    print("not connected");
}
?>
