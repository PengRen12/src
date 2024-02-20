<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $countryCode = $_POST['countryCode'];
    $phoneNumber = $_POST['phoneNumber'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];

    // Include the database connection file
    include 'db.php';

 
   
    $sql = "INSERT INTO job_applications (email, first_name, last_name, country_code, phone_number, country, gender) 
    VALUES ('$email', '$firstName', '$lastName', '$countryCode', '$phoneNumber', '$country', '$gender')";
  
  if ($conn->query($sql) === TRUE) {
    // Display success message
    echo "Your order has been successfully submitted";
} else {
    // If there was an error in the query, display an error message
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
}
?>
