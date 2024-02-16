<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
<style>
   body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f7f7f7;
    }
    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        text-align: center;
        background-color: #ffffff;
        border: 1px solid #dddddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        font-size: 68px; /* Increase font size */
    }
    input[type="text"],
    input[type="email"],
    textarea {
        width: calc(100% - 22px); /* Adjusting width to account for padding */
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 20px;
        border: 1px solid #dddddd;
        border-radius: 5px; /* Adding border radius */
    }
    button {
        width: 100%;
        padding: 10px;
        background-color: #333;
        color: white;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #555;
    }
    /* Confirmation message styling */
    .confirmation {
        color: green;
        margin-top: 10px;
    }
</style>
</head>
<body>
<?php require_once 'header.php'; ?>
<div class="container">
    <h1 style="font-size: 68px;">CONTACT US</h1> <!-- Apply font size here -->
    <p>If you have any questions or concerns you'd like to share with us, please fill out the form below.</p >
    <p>This website is only affiliated with the New York and New Jersey stores only. If you need to reach out to any other locations, please contact them through their Instagram and Facebook. Thank you!</p >

    <form method="post" action="contact.php" onsubmit="return validateForm()">
        <div style="text-align: left;"> <!-- Align labels and inputs to the left -->
            <label for="first_name">First Name (required)</label><br>
            <input type="text" id="first_name" name="first_name" required><br>
 
            <label for="last_name">Last Name (required)</label><br>
            <input type="text" id="last_name" name="last_name" required><br>
 
            <label for="email">Email (required)</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="TEL">TEL (required)</label><br>
            <input type="text" id="TEL" name="TEL" required><br>
 
            <label for="message">Message (required)</label><br>
            <textarea id="message" name="message" required></textarea><br>
        </div>
        <button type="submit">Send</button>
    </form>
    <div class="confirmation" id="confirmation" style="display: none;"> <!-- Confirmation message -->
        Thank you for contacting us! We will get back to you soon.
    </div>
</div>

<script>
    // Form Validation Function
    function validateForm() {
        var firstName = document.getElementById('first_name').value;
        var lastName = document.getElementById('last_name').value;
        var email = document.getElementById('email').value;
        var message = document.getElementById('message').value;

        if (firstName.trim() == '' || lastName.trim() == '' || email.trim() == '' || message.trim() == '') {
            alert('Please fill out all required fields.');
            return false;
        }

        showConfirmation(); // Call confirmation message function if form is valid
        return true;
    }

    // Confirmation Message Function
    function showConfirmation() {
        document.getElementById('confirmation').style.display = 'block';
    }
</script>

<?php require_once 'footer.php'; ?>
</body>
</html>