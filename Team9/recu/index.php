<?php require_once 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job Application Form</title>
</head>
<body>
    <form method="post" action="process.php">
        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="email2">Retype Email Address:</label><br>
        <input type="email" id="email2" name="email2" required><br>

        <label for="password">Choose Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <label for="password2">Retype Password:</label><br>
        <input type="password" id="password2" name="password2" required><br>

        <label for="firstName">First Name:</label><br>
        <input type="text" id="firstName" name="firstName" required><br>

        <label for="lastName">Last Name:</label><br>
        <input type="text" id="lastName" name="lastName" required><br>

        <label for="countryCode">Country/Region Code:</label><br>
        <select id="countryCode" name="countryCode" required>
            <option value="FINLAND">FINLAND</option>
            <option value="JANPAN">JANPAN</option>
            <option value="CHINA">CHINA</option>
            <option value="GERMAN">GERMAN</option>
            <option value="FRANCE">FRANCE</option>
            <option value="SPAIN">SPAIN</option>
            
        </select><br>

        <label for="phoneNumber">Phone Number:</label><br>
        <input type="text" id="phoneNumber" name="phoneNumber" required><br>

        <label for="country">Country:</label><br>
        <select id="country" name="country" required>
        <option value="FINLAND">Select</option>
        <option value="FINLAND">FINLAND</option>
            <option value="JANPAN">JANPAN</option>
            <option value="CHINA">CHINA</option>
            <option value="GERMAN">GERMAN</option>
            <option value="FRANCE">FRANCE</option>
            <option value="SPAIN">SPAIN</option>
            
        </select><br>

        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <!-- Add other gender options here -->
        </select><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

        <?php require_once 'footer.php'; ?>
    </form>