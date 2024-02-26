<?php
include 'db.php'; 


if(isset($_GET['userId'])) {
    $userId = $_GET['userId'];

   
    $stmt = $conn->prepare("SELECT * FROM job_applications WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
    } else {
        echo "No user found.";
        exit;
    }
} else {
    echo "No user ID was provided.";
    exit;
}

$conn->close();
?>
<?php require_once 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <form action="updateUser.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        Email: <input type="email" name="email" value="<?php echo $user['email']; ?>"><br>
        First Name: <input type="text" name="firstName" value="<?php echo $user['first_name']; ?>"><br>
        Last Name: <input type="text" name="lastName" value="<?php echo $user['last_name']; ?>"><br>
        Country Code: <input type="text" name="countryCode" value="<?php echo $user['country_code']; ?>"><br>
        Phone Number: <input type="text" name="phoneNumber" value="<?php echo $user['phone_number']; ?>"><br>
        Country: <input type="text" name="country" value="<?php echo $user['country']; ?>"><br>
        Gender: <select name="gender">
                    <option value="Male" <?php echo $user['gender'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                    <option value="Female" <?php echo $user['gender'] == 'Female' ? 'selected' : ''; ?>>Female</option>
                    
                </select><br>
        <input type="submit" value="Update User">
    </form>
</body>
</html>
<?php require_once 'footer.php'; ?>
