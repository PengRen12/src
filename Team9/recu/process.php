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

 
    $stmt = $conn->prepare("INSERT INTO job_applications (email, first_name, last_name, country_code, phone_number, country, gender) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
    
    $stmt->bind_param("sssssss", $email, $firstName, $lastName, $countryCode, $phoneNumber, $country, $gender);

  
    if ($stmt->execute()) {
        echo "New record added";
    } else {
        echo "Error: " . $stmt->error;
    }

   
    $stmt->close();
   
    $conn->close();
}
?>
