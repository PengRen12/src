<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once 'header.php'; ?>
    <meta charset="UTF-8">
    <title>Job Application Form</title>
    <script>
        window.onload = function() {
            document.getElementById('myForm').onsubmit = function() {
                var email = document.getElementById('email').value;
                var confirmEmail = document.getElementById('email2').value;
                var password = document.getElementById('password').value;
                var confirmPassword = document.getElementById('password2').value;

                // Check if emails match
                if(email != confirmEmail) {
                    alert('Email addresses do not match.');
                    return false; // Prevent form submission
                }

                // Check if passwords match
                if(password != confirmPassword) {
                    alert('Passwords do not match.');
                    return false; // Prevent form submission
                }

                // Additional validation checks can be added here

                return true; // Allow form submission
            };
        };
    </script>
     <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333; /* Standard text color */
            background-color: #f8f8f8; /* Light background for better contrast */
            margin: 0;
            padding: 0;
        }
      

        section {
            text-align: center; /* Center-align text */
            padding: 20px 0; /* Padding for spacing */
            margin: 0 10%; /* Margins on the sides */
        }

        h1 {
            color: #0056b3; /* A strong color for the main heading */
            margin-bottom: 10px;
            font-size:100px;
        }

        h2 {
            color: #004494; /* A slightly darker color for sub-headings */
            margin-bottom: 8px;
            font-size:50px;
        }

        p {
            font-size: 25px; /* Slightly larger paragraph text */
            line-height: 1.6; /* Spacing for readability */
            color: #666; /* Dark gray for paragraphs for readability */
            max-width: 800px; /* Max width for optimal reading line length */
            margin-left: auto; /* Center the paragraph */
            margin-right: auto;
        }

        input[type=email], input[type=password], input[type=text], select {
            width: 60%; /* Responsive width */
            padding: 10px; /* Padding for form elements */
            margin-bottom: 10px; /* Space between form elements */
            border: 1px solid #ddd; /* Subtle border color */
        }
        .form-container {
        width: 100%; /* Take full width to center the form within */
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
    }
        form {
        width: 1; /* Adjust the width as needed */
        margin-top: 20px;
        border: 1px solid #ccc; /* Optional border */
        padding: 150px;
        background-color: #fff; /* White background */
        justify-content: center;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional shadow for depth */
    }

    label {
        display: block;
        margin-top: 10px;
        margin-bottom: 5px;
    }
        input[type=submit] {
            background-color: #0056b3; /* Button color */
            color: white; /* Text color */
            padding: 10px 20px;
            border: none; /* No border */
            cursor: pointer; /* Cursor indication for action */
            font-size: 1em;
        }

        input[type=submit]:hover {
            background-color: #004494; /* Darker on hover */
        }

        .why-join-us {
            background-color: #eef4fd; /* Light background for emphasis */
            border-top: 2px solid #0056b3; /* Accent at the top */
            border-bottom: 2px solid #0056b3; /* Accent at the bottom */
          
        }
        section {
    text-align: center;
    padding: 20px 0;
    margin: 0;
}
    </style>
</head>
<body>
<div class="content-with-image">
    <div class="text-content">
<section class="company-introduction">
        <h1>Welcome to Our Company!</h1>
        <p>Embrace the Serenity of Sip - Panda Milk Tea

        Embrace the Serenity of Sip - Panda Milk Tea

Welcome to Panda Milk Tea, 
where every cup we serve is a story of tradition infused with innovation. Nestled in the heart of the city, 
Panda Milk Tea is more than just a beverage brand; it's a sanctuary for tea enthusiasts and 
a hub for those seeking a moment of peace in their bustling lives.</p>
    </section>

    <section class="position-details">
        <h2>Open Positions</h2>
        <p>We are currently looking for dynamic and passionate individuals to fill several roles within our organization. Below you will find a list of positions we are actively seeking to fill. We encourage you to read through the details and apply for any that align with your skills and career aspirations.</p>
    </section>

    <section class="how-to-apply">
        <h2>How to Apply</h2>
        <p>To apply for an open position, please fill out the form below with your personal and professional details. Ensure to provide accurate and up-to-date information to help us understand your qualifications and fit for the role. Our recruitment team will review your application and get in touch if your profile matches our requirements.</p>
        <div class="image-container">
        <!-- Insert your image here -->
        <img src="image/pda.png" alt="pda">
    </div>
 
    </section>
    <form method="post" action="process.php" id="myForm">
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
        <input type="text" id="countryCode" name="countryCode" required><br>

        <label for="phoneNumber">Phone Number:</label><br>
        <input type="text" id="phoneNumber" name="phoneNumber" required><br>

        <label for="country">Country:</label><br>
        <select id="country" name="country" required>
            <option value="">Select</option>
            <option value="FINLAND">FINLAND</option>
            <option value="JAPAN">JAPAN</option> 
            <option value="CHINA">CHINA</option>
            <option value="GERMANY">GERMAN</option> 
            <option value="FRANCE">FRANCE</option>
            <option value="SPAIN">SPAIN</option>
        </select><br>

        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <!-- Additional gender options can be added here -->
        </select><br>
        
 
        <input type="submit" value="Submit">
    </form>
  
</body>
<section class="why-join-us">
        <h2>Why Join Us?</h2>
        <p>Joining Our Company means being part of a team that values innovation, excellence, and collaboration. We offer competitive compensation packages, comprehensive benefits, and numerous opportunities for professional growth and development. We believe in empowering our employees to achieve their career goals and contribute to the innovation that drives our success.</p>
    </section>
</html>
<?php require_once 'footer.php'; ?>