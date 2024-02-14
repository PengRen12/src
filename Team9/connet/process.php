<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $firstName = $_POST['first_name'] ;
    $lastName = $_POST['last_name'] ;
    $email = $_POST['email'] ;
    $message = $_POST['message'] ;

       
   
    // Include the database connection file
    include 'db.php';

    // Define an SQL query to insert data into the 'studentsinfo' table
    $sql = "INSERT INTO contact_messages ( first_name,last_name, email, message)
            VALUES ( '$firstName','$lastName', '$email', '$message')";

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