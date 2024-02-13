<?php
session_start();
include 'header.php';


$total = 0;


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

//  orders
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    
    if ($action === 'add') {
        if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
            $productId = $_POST['product_id'];
            $quantity = $_POST['quantity'];
            $sugar = isset($_POST['sugar']) ? $_POST['sugar'] : 'normal'; 
            $temperature = isset($_POST['temperature']) ? $_POST['temperature'] : 'cold'; 

            
            if (isset($products[$productId])) {
                
                if (isset($_SESSION['cart'][$productId])) {
                    $_SESSION['cart'][$productId]['quantity'] += $quantity;
                } else {
                    
                    $_SESSION['cart'][$productId] = [
                        'product_id' => $productId,
                        'quantity' => $quantity,
                        'sugar' => $sugar,
                        'temperature' => $temperature
                    ];
                }
            } else {
                echo "Invalid product.";
            }
        }
    } elseif ($action === 'remove') {
        if (isset($_POST['product_id']) && isset($_SESSION['cart'][$_POST['product_id']])) {
            unset($_SESSION['cart'][$_POST['product_id']]);
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['clear_cart'])) {
    $_SESSION['cart'] = [];
}

// Display product list
echo "<h2>Product List</h2>";
echo "<div style='display: flex;'>";
foreach (['tea', 'smoothie', 'icecream'] as $category) {
    echo "<div style='margin-right: 20px;'>";
    echo "<h3>$category</h3>";
    echo "<ul>";
    foreach ($products as $productId => $product) {
        if ($product['category'] === $category) {
            echo "<li>{$product['name']} - Price: \${$product['price']} <form method='post' action=''>";
            echo "<input type='hidden' name='product_id' value='$productId'>";
            echo "<input type='hidden' name='action' value='add'>";
            echo "<input type='number' name='quantity' value='1'>";
            echo "<select name='sugar'><option value='normal'>Normal</option><option value='less'>Less sugar</option><option value='half'>Half sugar</option><option value='no'>No sugar</option></select>";
           
            if ($productId == 3 || $productId == 4 || $productId == 5 || $productId == 8 || $productId == 9 || $productId == 7) {
                echo "<select name='temperature'><option value='cold' selected>Cold</option></select>"; 
            } 
            else {
                echo "<select name='temperature'><option value='hot'>Hot</option><option value='cold' selected>Cold</option></select>";
            }
            echo "<input type='submit' value='Add to Cart'></form></li>";
        }
    }
    echo "</ul>";
    echo "</div>";
}
echo "</div>";

// Display cart contents
echo "<h2>Shopping Cart</h2>";
if (!empty($_SESSION['cart'])) {
    $total = 0; 
    echo "<ul>";
    foreach ($_SESSION['cart'] as $productId => $item) {
        if (!empty($item['quantity'])) {
            $product = $products[$item['product_id']];
            $subtotal = $product['price'] * $item['quantity'];
            $total += $subtotal;
           
            $sugar = isset($item['sugar']) ? $item['sugar'] : 'normal';
            $temperature = isset($item['temperature']) ? $item['temperature'] : 'cold';
            echo "<li>{$product['name']} - Quantity: {$item['quantity']} - Subtotal: \${$subtotal} - Sugar: {$sugar} - Temperature: {$temperature} 
            <form method='post' action=''>
                <input type='hidden' name='product_id' value='{$item['product_id']}'>
                <input type='hidden' name='action' value='remove'>
                <input type='submit' value='Remove'>
            </form>
            </li>";
        }
    }
    echo "</ul>";
    echo "<p>Total: \${$total}</p>";
} else {
    echo "<p>Your shopping cart is empty.</p>";
}
// Add link to clear the cart
echo "<p><a href='?clear_cart=true'>Clear shopping cart</a></p>";

// Display user information input fields and payment method options
echo "<h2>Checkout</h2>";
echo "<form name='form1' method='post' action='feature3_process1.php'>";
echo "First Name: <input type='text' name='fname'><br>";
echo "Last Name: <input type='text' name='lname'><br>";
echo "Phone: <input type='text' name='phone'><br>";
echo "Email: <input type='email' name='email' id='email'><br>";
echo "<div id='emailError' style='color: red;'></div>";
echo "Address: <input type='text' name='address'><br>";
echo "Payment Method: <select name='payment_method' id='payment_method'>
    <option value='cash'>Cash</option>
    <option value='credit_card'>Credit Card</option>
</select><br>";
echo "<div id='credit_card_details' style='display: none;'>
    Credit Card Number: <input type='text' name='credit_card_number'><br>
</div>";

echo "<input type='hidden' name='total' value='<?php echo $total; ?>'>";
echo "<input type='submit' value='Checkout'>";
echo "</form>";


echo "<script>
document.getElementById('payment_method').addEventListener('change', function() {
    var creditCardDetails = document.getElementById('credit_card_details');
    creditCardDetails.style.display = this.value === 'credit_card' ? 'block' : 'none';
});
</script>";

// Email validation JavaScript
echo "<script>
document.getElementById('email').addEventListener('input', function() {
    const email = this.value;
    const emailError = document.getElementById('emailError');
    if (email === '' || !email.includes('@')) {
        emailError.innerHTML = 'Please enter a valid email address';
    } else {
        emailError.innerHTML = '';
    }
});
</script>";


// footer.php 
include 'footer.php';
?>


