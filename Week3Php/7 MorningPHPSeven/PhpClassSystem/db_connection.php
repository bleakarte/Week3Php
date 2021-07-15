<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "swaymnier";

$connection = mysqli_connect($host,$username,$password,$database);

 //check if the connection to the db was denied to stop the process

if (!isset($connection)){
    die("Connection to the Database fail");
}