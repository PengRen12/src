<?php
include 'header.php';
// Check if the 'regSub' button in the form was clicked
if (isset($_POST['regSub'])) {
    // Retrieve data from the form and store it in variables
    $products = $_POST['products']; // Added line
    $fname = $_POST['fname'];     
    $email = $_POST['email'];    
    $phone = $_POST['phone'];       
    $address = $_POST['address']; 
    $paymentmethod = $_POST['paymentmethod']; // Added line

    // Include the database connection file
    include 'feature3_db.php';

    // Define an SQL query to insert data into the 'orders' table
    $sql = "INSERT INTO orderonline (products, fname, email, phone, address, paymentmethod)
            VALUES ('$products', '$fname', '$email', '$phone', '$address', '$paymentmethod')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "Your order has been successfully submitted";
    } 
    else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
include 'footer.php';
?>
