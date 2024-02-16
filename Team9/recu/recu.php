<!DOCTYPE html>
<html lang="zh">
<head>
<?php require_once 'header.php'; ?>
    <meta charset="UTF-8">
    <title>Recruitment information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header h1, footer h3 {
            text-align: center;
        }
        .job, .application-form {
            margin-bottom: 20px;
            padding: 20px;
            background: #f4f4f4;
        }
        .job h2, .application-form h2 {
            color: #333;
        }
        .job p, .application-form p {
            margin-bottom: 10px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
        }
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background: #333;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #555;
        }
        /* Dark mode styles */
        .dark-mode {
            background-color: #333;
            color: #f4f4f4;
        }
        .dark-job, .dark-form {
            background: #222;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Recruitment of 2024 interns</h1>
    </header>
    <div class="container">
        <button id="toggleDarkMode" style="padding:10px 20px; font-size:16px; cursor:pointer; margin-bottom: 20px;">Toggle Dark Mode</button>
        <div class="job">
            <h2>Position description</h2>
            <p>Responsible for demand analysis, design and development of company projects.</p>
            <p>Have good programming habits and be able to complete high-quality coding and unit testing according to project requirements.</p>
            <p>Communicate effectively with team members to ensure project progress and quality.</p>
            
            <h2>Requirements</h2>
            <p>Class of 2024 Bachelor degree or above</p>
            <p>Good Coding Practices Clear</p>
            <p>Familiar with Java, databases, master basic operations, familiar with network protocols, and master data structures.</p>
        </div>
        <button onclick="location.href='index.php'" style="padding:10px 20px; font-size:16px; cursor:pointer;">Apply now</button>
    </div>
    <footer>
        <!-- Dynamic year will be inserted here -->
    </footer>

    <?php require_once 'footer.php'; ?>





    <script>
    // Dynamic Time Display
    document.addEventListener('DOMContentLoaded', function() {
        const footer = document.querySelector('footer');
        
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString(); // Default locale's time
            footer.innerHTML = `<h3>&copy; ${now.getFullYear()}  Current Time: ${timeString}</h3>`;
        }
        setInterval(updateTime, 1000);
        updateTime();
    });




        // Toggle Dark Mode
        document.getElementById('toggleDarkMode').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            document.querySelectorAll('.job, .application-form').forEach(element => {
                element.classList.toggle('dark-form');
            });
        });

    </script>
</body>
</html>
