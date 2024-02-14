<?php
$host = 'web23-db-1';  // Your database host
$dbname = 'app1';  // Your database name
$username = 'root';  // Your database username
$password = 'password';  // Your database password



$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
?>