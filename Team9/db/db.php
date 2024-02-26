<?php
$host = 'localhost';  // Your database host
$dbname = 'wp_peng23000';  // Your database name
$username = 'peng23000';  // Your database username
$password = '58eLWDw7';  // Your database password



$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
?>