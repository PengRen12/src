<?php require_once 'header.php'; ?>
<form method="post" action="process.php">


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
        <label for="first_name">First Name (required)</label><br>
        <input type="text" id="first_name" name="first_name" required><br>
        
        <label for="last_name">Last Name (required)</label><br>
        <input type="text" id="last_name" name="last_name" required><br>
        
        <label for="email">Email (required)</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="message">Message (required)</label><br>
        <textarea id="message" name="message" required></textarea><br>
        
        <button type="submit">Send</button>

        <?php require_once 'footer.php'; ?>
    </form>