<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $countryCode = $_POST['countryCode'];
    $phoneNumber = $_POST['phoneNumber'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
       
   
    // Include the database connection file
    include 'db.php';

    // Define an SQL query to insert data into the 'studentsinfo' table
    $sql = "INSERT INTO job_applications ( first_name,last_name, email, message)
            VALUES ( $email, $password, $firstName, $lastName, $countryCode, $phoneNumber, $country, $gender)";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "New record added";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>