<?php
session_start();
$title = "Panda House - Order Online";
include 'header.php';

// Define products array
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

// Handle add to cart action
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add') {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $sugar = $_POST['sugar'];
    $temperature = $_POST['temperature'];

    // Add item to cart
    if (isset($products[$productId])) {
        $item = [
            'product_id' => $productId,
            'quantity' => $quantity,
            'sugar' => $sugar,
            'temperature' => $temperature
        ];
        $_SESSION['cart'][$productId] = $item;
    }
}

// Handle remove from cart action
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'remove') {
    $productId = $_POST['product_id'];
    if (isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
    }
}
?>

<div style="padding: 20px;">
    <h1>Order Online</h1>

    <!-- Product List -->
<div class="product-list">
    <?php foreach (['tea', 'smoothie', 'icecream'] as $category): ?>
        <div class="category">
            <h3><?= ucfirst($category) ?></h3>
            <ul>
                <?php foreach ($products as $productId => $product): ?>
                    <?php if ($product['category'] === $category): ?>
                        <li>
                            <div class="product-details">
                                <span class="product-name"><?= $product['name'] ?></span>
                                <span class="price">Price: $<?= $product['price'] ?></span>
                                <form class="add-to-cart-form" method='post' action=''>
                                    <input type='hidden' name='product_id' value='<?= $productId ?>'>
                                    <input type='hidden' name='action' value='add'>
                                    <div class="quantity-selector">
                                        <label for="quantity">Quantity:</label>
                                        <input type='number' name='quantity' value='1'>
                                    </div>
                                    <div class="sugar-selector">
                                        <label for="sugar">Sugar:</label>
                                        <select name='sugar'>
                                            <option value='normal'>Normal</option>
                                            <option value='less'>Less sugar</option>
                                            <option value='half'>Half sugar</option>
                                            <option value='no'>No sugar</option>
                                        </select>
                                    </div>
                                    <div class="temperature-selector">
                                        <label for="temperature">Temperature:</label>
                                        <select name='temperature'>
                                            <?php $isCold = in_array($productId, [3, 4, 5, 8, 9, 7]); ?>
                                            <option value='<?= $isCold ? 'cold' : 'hot' ?>' selected><?= $isCold ? 'Cold' : 'Hot' ?></option>
                                            <?php if (!$isCold): ?>
                                                <option value='cold'>Cold</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <input class="add-to-cart-button" type='submit' value='Add to Cart'>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</div>


    <!-- Shopping Cart -->
    <div class="shopping-cart">
    <h2>Shopping Cart</h2>
    <?php if (!empty($_SESSION['cart'])): ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $productId => $item): ?>
                <?php if (!empty($item['quantity'])): ?>
                    <li>
                        <div class="cart-item">
                            <div class="item-details">
                                <span class="product-name"><?= $products[$item['product_id']]['name'] ?></span>
                                <span class="quantity">Quantity: <?= $item['quantity'] ?></span>
                                <span class="subtotal">Subtotal: $<?= $products[$item['product_id']]['price'] * $item['quantity'] ?></span>
                                <span class="sugar">Sugar: <?= isset($item['sugar']) ? $item['sugar'] : 'normal' ?></span>
                                <span class="temperature">Temperature: <?= isset($item['temperature']) ? $item['temperature'] : 'cold' ?></span>
                            </div>
                            <form class="remove-form" method='post' action=''>
                                <input type='hidden' name='product_id' value='<?= $item['product_id'] ?>'>
                                <input type='hidden' name='action' value='remove'>
                                <input class="remove-button" type='submit' value='Remove'>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <?php $total = array_reduce($_SESSION['cart'], function($carry, $item) use ($products) {
            return $carry + ($products[$item['product_id']]['price'] * $item['quantity']);
        }, 0); ?>
        <p class="total">Total: $<?= $total ?></p>
    <?php else: ?>
        <p>Your shopping cart is empty.</p>
    <?php endif; ?>
</div>


    <!-- Checkout -->
    <div class="checkout">
        <h2>Checkout</h2>
        <form name='form1' method='post' action='feature3_process1.php'>
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type='text' name='fname' id="fname">
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type='text' name='lname' id="lname">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type='text' name='phone' id="phone">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type='email' name='email' id='email'>
                <div id='emailError' style='color: red;'></div>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type='text' name='address' id="address">
            </div>
            <div class="form-group">
                <label for="payment_method">Payment Method:</label>
                <select name='payment_method' id='payment_method'>
                    <option value='cash'>Cash</option>
                    <option value='credit_card'>Credit Card</option>
                </select>
            </div>
            <div id='credit_card_details' style='display: none;'>
                <label for="credit_card_number">Credit Card Number:</label>
                <input type='text' name='credit_card_number' id="credit_card_number">
            </div>
            <?php if (isset($total)): ?>
                <input type='hidden' name='total' value='<?= $total ?>'>
            <?php endif; ?>
            <input type='submit' value='Checkout'>
        </form>
    </div>
</div>

<!-- JavaScript for payment method -->
<script>
    document.getElementById('payment_method').addEventListener('change', function() {
        var creditCardDetails = document.getElementById('credit_card_details');
        creditCardDetails.style.display = this.value === 'credit_card' ? 'block' : 'none';
    });
</script>

<!-- JavaScript for email validation -->
<script>
    document.getElementById('email').addEventListener('input', function() {
        const email = this.value;
        const emailError = document.getElementById('emailError');
        if (email === '' || !email.includes('@')) {
            emailError.innerHTML = 'Please enter a valid email address';
        } else {
            emailError.innerHTML = '';
        }
    });
</script>

<?php include 'footer.php'; ?>



