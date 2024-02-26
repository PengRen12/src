<?php require_once 'adminheader.php'; ?>
<?php

include 'connetdb.php';


if (isset($_GET['requestId'])) {
    $requestId = $_GET['requestId'];

  
    $stmt = $conn->prepare("SELECT * FROM contact_messages WHERE id = ?");
    $stmt->bind_param("i", $requestId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        
        ?>
        <form action="updateContactRequest.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
            First Name: <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"><br>
            Last Name: <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"><br>
            Message: <textarea name="message"><?php echo $row['message']; ?></textarea><br>
            <button type="submit">Update Request</button>
        </form>
        <?php
    } else {
        echo "Request not found.";
    }
    $stmt->close();
} else {
    echo "No request ID provided.";
}

$conn->close();
?>
<?php require_once 'footer.php'; ?>