
    <!DOCTYPE html>
<html lang="en">
<head>

    <style>
        

        .footer-cyberpunk {
            background-color: #212529; /* Dark shade */
            color: #8bc34a; /* Neon Green */
            padding: 20px 0;
            text-align: center;
            border-top: 3px solid #f50057; /* Neon Pink */
        }

        .footer-cyberpunk a {
            color: #f50057; /* Neon Pink */
            transition: color 0.3s;
        }

        .footer-cyberpunk a:hover {
            color: #8bc34a; /* Neon Green */
            text-decoration: none;
        }

        /* Optional: Additional styling for footer content */
    </style>
</head>
<body>
    <!-- ... (rest of the body content) ... -->

    <footer class="footer-cyberpunk">
        <div class="container">
            <p>&copy; 2024 Peng Ren. All rights reserved.</p>
            <p>
                <a href="#">Privacy Policy</a> | 
                <a href="#">Terms of Use</a> | 
                <a href="#">Contact Us</a>
            </p>
           <?php
            $filename = basename($_SERVER['SCRIPT_FILENAME']);
             $filemodtime = filemtime($filename);
             echo "<p>Last modified: " . date("F d Y H:i:s.", $filemodtime) . "</p>";
?>
        </div>
    </footer>

    <!-- ... (Bootstrap JS and dependencies) ... -->
</body>
</html>
