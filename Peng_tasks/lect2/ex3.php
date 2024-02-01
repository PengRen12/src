<?php
$title = "Exercise 3: Variable, Strings & Operators";

?>
<?php include 'header.php'; ?>
<h1> Create a simple HTML form to collect the user’s Firstname and Lastname. 
    Use the echo statement to print “Hello [Firstname] [Lastname], 
    You are welcome to my site.” inside an <h3> tag.  </h1>

<form method="post" action="process1.php">
    Name: <input type="text" name="nimi" required> <br><br>
    Email: <input type="email" name="email" required> <br><br>
    DOB: <input type="date" name="dob"> <br><br>
    Select Color: <input type="color" name="color"> <br><br>
    <input type="submit" value="Submit">
</form>


  

<?php
// Form handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    echo "<h3>Hello " . $firstname . " " . $lastname . ", You are welcome to my site.</h3>";
}

// String Variables
$str1 = "Hello";
$str2 = "World";
$combinedString = $str1 . " " . $str2;
echo "<p>Combined String: " . $combinedString . " - Length: " . strlen($combinedString) . "</p>";

// Number Addition
$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum = $num1 + $num2 + $num3;
echo "<p>Sum: " . $sum . "</p>";

// Browser Detection
echo "<p>Browser: " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
?>

<!-- Bootstrap-styled table -->
<?php
    $g1=5;
    $g2=4;
    $g3=5;
    ?>
<table>
<tr><th>S.n.</th>   <th>Name</th> <th> Grade </th>
   <tr>
      <th>1</th> 
      <th>John</th> 
      <th> <?php echo $g1?> </th>
   </tr>
   <tr>
      <th>2</th> 
      <th>Alice</th> 
      <th> <?php echo $g2?> </th>
   </tr>
   <tr>
      <th>3</th> 
      <th>Bob</th> 
      <th> <?php echo $g3?> </th>
   </tr>
</table>

<?php include 'footer.php'; ?>
</body>
</html>
