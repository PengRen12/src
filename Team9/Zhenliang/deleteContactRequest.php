<?php
include 'connetdb.php'; 


if (isset($_POST['requestId'])) {
    $requestId = $_POST['requestId'];

   
    $stmt = $conn->prepare("DELETE FROM contact_messages WHERE id = ?");
    $stmt->bind_param("i", $requestId);

    if ($stmt->execute()) {
        echo "Request deleted successfully.";
        
        
    } else {
        echo "Error deleting request: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "No request ID provided.";
}

$conn->close();
?>
