<?php
$servername = "php24-db-1";
$username = "app1";
$password = "200012";
$dbname = "app1";


$conn = new mysqli($servername, $username, $password, $dbname);
//-> is check
if ($conn->connect_error){
  die("Connection Failed:" . $conn->connect_error);
}

?>