<?php
$host = 'localhost';  // Your database host
$dbname = 'wp_zhenliang23000';  // Your database name
$username = 'zhenliang23000';  // Your database username
$password = '42JbbS4x';  // Your database password



$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
?>