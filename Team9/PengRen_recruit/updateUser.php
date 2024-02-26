<?php
include 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(isset($_POST['id'], $_POST['email'], $_POST['firstName'], $_POST['lastName'], $_POST['countryCode'], $_POST['phoneNumber'], $_POST['country'], $_POST['gender'])) {
        $id = $_POST['id'];
        $email = $_POST['email'];
        $first_name = $_POST['firstName']; 
        $last_name = $_POST['lastName'];
        $country_code = $_POST['countryCode'];
        $phone_number = $_POST['phoneNumber'];
        $country = $_POST['country'];
        $gender = $_POST['gender'];

       
        $stmt = $conn->prepare("UPDATE job_applications SET email=?, first_name=?, last_name=?, country_code=?, phone_number=?, country=?, gender=? WHERE id=?");
        $stmt->bind_param("sssssssi", $email, $first_name, $last_name, $country_code, $phone_number, $country, $gender, $id);

        
        if ($stmt->execute()) {
            echo "Update Success";
           
        } else {
            echo "Update failed: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Required fields are not filled in completely.";
    }
} else {
    echo "Only supports POST request method";
}

$conn->close();
?>
  <?php require_once 'footer.php'; ?>