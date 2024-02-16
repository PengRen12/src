
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
   
    input, textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 20px;
        border: 1px solid #dddddd;
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
</style>
</head>
<body>
<?php require_once 'header.php'; ?>
<div class="container">
    <h1>CONTACT US</h1>
    <p>If you have any questions or concerns you'd like to share with us, please fill out the form below.</p>
    <p>This website is only affiliated with the New York and New Jersey stores only. If you need to reach out to any other locations, please contact them through their Instagram and Facebook. Thank you!</p>

    <form method="post" action="process.php">
        <label for="first_name">First Name (required)</label><br>
        <input type="text" id="first_name" name="first_name" required><br>
        
        <label for="last_name">Last Name (required)</label><br>
        <input type="text" id="last_name" name="last_name" required><br>
        
        <label for="email">Email (required)</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="message">Message (required)</label><br>
        <textarea id="message" name="message" required></textarea><br>
        
        <button type="submit">Send</button>
    </form>
</div>
<?php require_once 'footer.php'; ?>
</body>
</html>
