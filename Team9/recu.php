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
            font-size:40px;
        }
        .job p, .application-form p {
            margin-bottom: 10px;
            font-size:25px;
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
            <p>As a key member of our software development team, you will play a crucial role in the demand analysis, design, 
                and development of our company's projects. Your responsibilities will extend beyond mere coding; you'll be instrumental in 
                shaping the future of our software solutions, ensuring they meet the evolving needs of our clients and the market.</p>

            <p>Your day-to-day tasks will include engaging in detailed requirement analysis to understand the core objectives of our projects, 
                designing scalable and robust software architectures, and implementing solutions with clean, efficient code. We value good programming habits highly, 
                 expecting you to produce high-quality coding and conduct thorough unit testing to ensure functionality and reliability according 
                 to our project specifications.</p>

            <p>Effective communication is at the heart of our project management approach. You'll work closely with team members across different departments, from developers to designers and QA engineers, ensuring seamless project progress and maintaining the highest quality standards. Your ability to articulate ideas clearly and collaborate proactively will contribute significantly to our team's success.</p>
            <p>Have good programming habits and be able to complete high-quality coding and unit testing according to project requirements.</p>
            <p>Communicate effectively with team members to ensure project progress and quality.</p>
            
            <h2>Requirements</h2>
            
            <p>Educational Background: You must hold a Bachelor's degree or higher from the class of 2024. 
                We value a strong academic foundation that prepares you for the challenges of software development.</p>
            <p>Coding Expertise: A clear understanding of good coding practices is essential. 
                 You should be adept at writing clean, maintainable code that adheres to industry standards and best practices.</p>
            <p>Technical Skills: Proficiency in Java is a must, along with a solid understanding of databases.
                 You should be comfortable with basic database operations and have a good grasp of network protocols. 
                 A strong foundation in data structures is also required, as it is crucial for developing efficient and scalable software.</p>
            <p>Analytical Skills: The ability to analyze and interpret complex requirements is key. 
                 You should be capable of translating business needs into technical specifications and developing solutions that address those needs effectively.</p>
            <p>Team Collaboration: We are looking for individuals who thrive in team settings. 
                The ability to work collaboratively, share knowledge, and contribute positively to a team environment is critical for this role.</p>
            <p>Adaptability: The tech industry is ever-evolving, and so are its challenges. 
                We need someone who is flexible, eager to learn new technologies, and can adapt to changing project requirements.</p>
            <p>This position offers the opportunity to work on exciting projects in a dynamic and supportive environment. If you are passionate about technology and have a commitment to excellence, we would love to hear from you.

</p>
        </div>
        <button onclick="location.href='index.php'" style="padding:10px 20px; font-size:35px; cursor:pointer;">Apply now</button>
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
            const timeString = now.toLocaleTimeString(); 
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
