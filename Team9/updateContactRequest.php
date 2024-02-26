<?php require_once 'adminheader.php'; ?>
<?php
include 'connetdb.php'; 


if (isset($_POST['id'], $_POST['email'], $_POST['first_name'], $_POST['last_name'], $_POST['message'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $message = $_POST['message'];

   
    $stmt = $conn->prepare("UPDATE contact_messages SET email = ?, first_name = ?, last_name = ?, message = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $email, $first_name, $last_name, $message, $id);

    if ($stmt->execute()) {
        echo "Request updated successfully.";
        
    } else {
        echo "Error updating request: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "All fields are required.";
}

$conn->close();
?>
<?php require_once 'footer.php'; ?>