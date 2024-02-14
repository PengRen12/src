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
        .job {
            margin-bottom: 20px;
            padding: 20px;
            background: #f4f4f4;
        }
        .job h2 {
            color: #333;
        }
        .job p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Recruitment of 2024 interns</h1>
    </header>
    <div class="container">
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
        <button onclick="location.href='apply.php'" style="padding:10px 20px; font-size:16px; cursor:pointer;">Apply now</button>
    </div>
    <footer>
            

        
    </footer>

    <?php require_once 'footer.php'; ?>
</body>
</html>
