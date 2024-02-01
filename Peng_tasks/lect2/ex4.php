<?php
$title = "Exercise 4: Control flow and loops";

?>
<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Exercises</title>
   
</head>
<body>

<!-- Voting Eligibility Form -->
<h2>Voting Eligibility Check</h2>
<form method="post">
    Name: <input type="text" name="voting_name" required><br>
    Age: <input type="number" name="age" required><br>
    <input type="submit" name="voting_submit" value="Check Eligibility">
</form>

<!-- Multiplication Table Form -->
<h2>Multiplication Table</h2>
<form method="post">
    Enter a number for the table: <input type="number" name="number" required><br>
    <input type="submit" name="table_submit" value="Generate Table">
</form>

<!-- Print Numbers Form -->
<h2>Print Numbers 1 to n</h2>
<form method="post">
    Enter a number: <input type="number" name="n" required><br>
    <input type="submit" name="numbers_submit" value="Print Numbers">
</form>

<?php
// Voting Eligibility
if (isset($_POST['voting_submit'])) {
    $name = htmlspecialchars($_POST['voting_name']);
    $age = (int)$_POST['age'];

    if ($age >= 18) {
        echo "<p>Hello $name, You are eligible to vote.</p>";
    } else {
        echo "<p>Hello $name, You are not eligible to vote.</p>";
    }
}

// Current Month Check
$month = date('F');
echo "<h2>Month Check</h2>";
switch ($month) {
    case "August":
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $month so I don't have any holidays";
        break;
}

// Multiplication Table
if (isset($_POST['table_submit'])) {
    $number = (int)$_POST['number'];
    echo "<h3>Multiplication Table for $number</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$number x $i = " . ($number * $i) . "<br>";
    }
}

// Print Numbers 1 to n
if (isset($_POST['numbers_submit'])) {
    $n = (int)$_POST['n'];
    $i = 1;
    echo "<h3>Printing Numbers from 1 to $n</h3>";
    while ($i <= $n) {
        echo "$i<br>";
        $i++;
    }
}

// Print Elements of an Array
$myarray = array("HTML", "CSS", "PHP", "JavaScript");
echo "<h2>Array Elements</h2>";
foreach ($myarray as $element) {
    echo $element . "<br>";
}
?>

</body>
</html>






















<?php include 'footer.php'; ?>