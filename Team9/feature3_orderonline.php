<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Online</title>
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>
<body>

<?php
$title = "Order Online";
include 'header.php';
?>
<!-- Link to fill order & Read  Order -->
<div class="create-order-link" style="margin-top: 20px;">
    <li><a href="feature3_orderonline.php">Order Online(Customer Only )</a></li>
    <li><a href="feature3_read.php">Read Order Data(Admin Only)</a></li>
</div>
<h2>Input Order Information Below:</h2>
<form name='form1' method='post' action='feature3_process.php' id="orderForm">
    <div class="col">
        <label for="products">Products:</label>
        <select class="form-control" id="products" name="products">
            <option value="Strawberry milk tea & Matcha icecream,7€">Strawberry milk tea & Matcha icecream,7€</option>
            <option value="Berry milk tea & Vanilla icecream,8€">Berry milk tea & Vanilla icecream,8€</option>
            <option value="Berry smoothie & Vanilla icecream,9€">Berry smoothie & Vanilla icecream,9€</option>
            <option value="Fruit tea & Matcha smoothie,10€">Fruit tea & Matcha smoothie,10€</option>
            <option value="Others">Others</option>
        </select>
    </div>
    Name:<input type="text" name="fname" minlength="3" maxlength="30" id="name"><br>
    <span id="nameError" class="error-message"></span><br>
    Email:<input type="email" name="email" id="email"><br>
    <span id="emailError" class="error-message"></span><br>
    Phone:<input type="text" name="phone" minlength="7" maxlength="20" id="phone"><br>
    <span id="phoneError" class="error-message"></span><br>
    Address:<input type="text" name="address" minlength="7" maxlength="100" id="address"><br>
    <span id="addressError" class="error-message"></span><br>
    <div class="col">
        <label for="paymentmethod">Paymentmethod:</label>
        <select class="form-control" id="paymentmethod" name="paymentmethod">
            <option value="cashonly">Cashonly</option>
        </select>
    </div>
    <button type="submit" name="regSub" id="submitButton">Submit</button><br>
</form>

<!-- Display success or error message here -->
<div id="messageContainer">
    <?php
    if (isset($_GET['message'])) {
        echo '<p>' . $_GET['message'] . '</p>';
    }
    ?>
</div>

<script>
    function validateForm() {
        var fname = document.getElementById('name').value.trim();
        var email = document.getElementById('email').value.trim();
        var phone = document.getElementById('phone').value.trim();
        var address = document.getElementById('address').value.trim();

        var errorMessages = [];

        if (fname.length < 3 || fname.length > 30) {
            document.getElementById('nameError').innerHTML = "Name must be between 3 & 30 characters";
            errorMessages.push("Name must be between 3 & 30 characters");
        } else {
            document.getElementById('nameError').innerHTML = "";
        }
        if (email === '') {
            document.getElementById('emailError').innerHTML = "Email is required";
            errorMessages.push("Email is required");
        } else {
            document.getElementById('emailError').innerHTML = "";
        }
        if (!validateEmail(email)) {
            document.getElementById('emailError').innerHTML = "Please enter a valid email address";
            errorMessages.push("Please enter a valid email address");
        } else {
            document.getElementById('emailError').innerHTML = "";
        }
        if (phone.length < 7 || phone.length > 20) {
            document.getElementById('phoneError').innerHTML = "Phone number must be between 7 & 20 characters";
            errorMessages.push("Phone number must be between 7 & 20 characters");
        } else if (!/^\d+$/.test(phone)) {
            document.getElementById('phoneError').innerHTML = "Please enter a valid phone number";
            errorMessages.push("Please enter a valid phone number");
        } else {
            document.getElementById('phoneError').innerHTML = "";
        }
        if (address.length < 7 || address.length > 100) {
            document.getElementById('addressError').innerHTML = "Address must be between 7 & 100 characters";
            errorMessages.push("Address must be between 7 & 100 characters");
        } else {
            document.getElementById('addressError').innerHTML = "";
        }

        return errorMessages.length === 0;
    }

    function validateEmail(email) {
        var emailRegex = /\S+@\S+\.\S+/;
        return emailRegex.test(email);
    }

    document.getElementById("orderForm").addEventListener("submit", function(event) {
        if (!validateForm()) {
            event.preventDefault();
            alert("Please fill in all required fields correctly.");
        }
    });

    document.getElementById("name").addEventListener("input", function() {
        var fname = this.value.trim();
        var nameError = document.getElementById('nameError');

        if (fname.length < 3 || fname.length > 30) {
            nameError.innerHTML = "Name must be between 3 & 30 characters";
        } else {
            nameError.innerHTML = "";
        }
    });

    document.getElementById("email").addEventListener("input", function() {
        var email = this.value.trim();
        var emailError = document.getElementById('emailError');

        if (email === '') {
            emailError.innerHTML = "Email is required";
        } else if (!validateEmail(email)) {
            emailError.innerHTML = "Please enter a valid email address";
        } else {
            emailError.innerHTML = "";
        }
    });

    document.getElementById("phone").addEventListener("input", function() {
        var phone = this.value.trim();
        var phoneError = document.getElementById('phoneError');

        if (phone.length < 7 || phone.length > 20) {
            phoneError.innerHTML = "Phone number must be between 7 & 20 characters";
        } else if (!/^\d+$/.test(phone)) {
            phoneError.innerHTML = "Please enter a valid phone number";
        } else {
            phoneError.innerHTML = "";
        }
    });

    document.getElementById("address").addEventListener("input", function() {
        var address = this.value.trim();
        var addressError = document.getElementById('addressError');

        if (address.length < 7 || address.length > 100) {
            addressError.innerHTML = "Address must be between 7 & 100 characters";
        } else {
            addressError.innerHTML = "";
        }
    });
</script>

<?php
include 'footer.php';
?>

</body>
</html>



