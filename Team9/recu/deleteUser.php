<?php
include 'db.php'; 

if (isset($_POST['userId'])) {
    $userId = $_POST['userId'];

   
    $stmt = $conn->prepare("DELETE FROM job_applications WHERE id = ?");
    $stmt->bind_param("i", $userId); 

    if ($stmt->execute()) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "User ID not provided";
}

$conn->close();
?>
