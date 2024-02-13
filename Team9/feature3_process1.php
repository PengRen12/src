<?php
session_start();

// Define $products array
$products = [
    1 => ['name' => 'Strawberry milk tea', 'price' => 5, 'category' => 'tea'],
    2 => ['name' => 'Berry milk tea', 'price' => 6, 'category' => 'tea'],
    3 => ['name' => 'Berry smoothie', 'price' => 7, 'category' => 'smoothie'],
    4 => ['name' => 'Matcha smoothie', 'price' => 7, 'category' => 'smoothie'],
    5 => ['name' => 'Chocolate smoothie', 'price' => 7, 'category' => 'smoothie'],
    6 => ['name' => 'Fruit tea', 'price' => 4, 'category' => 'tea'],
    7 => ['name' => 'Boba smoothie', 'price' => 6, 'category' => 'smoothie'],
    8 => ['name' => 'Vanilla icecream', 'price' => 3, 'category' => 'icecream'],
    9 => ['name' => 'Matcha icecream', 'price' => 3, 'category' => 'icecream'],
];

// Include the database connection file
include 'feature3_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the form
    $fname = $_POST['fname'];           // First name
    $lname = $_POST['lname'];           // Last name
    $phone = $_POST['phone'];           // Phone number
    $email = $_POST['email'];           // Email address
    $address = $_POST['address'];       // Address
    $payment_method = $_POST['payment_method']; // Payment method
    
    // Calculate total amount
    $total = 0;
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $product = $products[$item['product_id']];
            $subtotal = $product['price'] * $item['quantity'];
            $total += $subtotal;
        }
    }

    // Store products in the session data
    $products_data = serialize($_SESSION['cart']);

    // Insert order information into the database
    $sql = "INSERT INTO orderonline (first_name, last_name, phone, email, address, payment_method, total, products) 
            VALUES ('$fname', '$lname', '$phone', '$email', '$address', '$payment_method', '$total', '$products_data')";
    
    // Check if the query was successful
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
