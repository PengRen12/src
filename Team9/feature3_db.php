<?php
$severname = "localhost";
$username = "xiaomeng23000";
$password = "0xPLXNK7";
$dbname = "wp_xiaomeng23000";


//create database connection
$conn = new mysqli($severname,$username,$password,$dbname);


 //check connection
 if ($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
 }
?>
