<?php

ini_set("display_error",1);
session_start();
$hostname="localhost";//127:0:0
$username="root";
$password="";
$database="bms-t";
$conn= new mysqli($hostname,$username,$password,$database);
if($conn->connect_error){
// echo'failed';
}else{
    // echo'pass';
}

?>
