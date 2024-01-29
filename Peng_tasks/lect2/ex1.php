<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php'; ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1: Getting Started with PHP - Peng</title>
</head>

<body>
  <h3>3.1 Write PHP code to output the following message:
    
  Hello world! My name is "David"
</h3>
<?php
echo"Hello world!My name is \"David\"";
    ?>
<h3>3.2Create a PHP variable named $title and assign it the value "PHP is interesting." 
    Then, use this variable as the content within an 
    (heading 4) element.
</h3>
<?php
    $title="PHP is interesting.";
    echo"<h4>$title</h4>";
?>

<h3>3.3Define three variables: $g1 = 5, $g2 = 4, and $g3 = 5. 
    These variables represent the grades of three students in the course. 
    To display this information, create an HTML table within your PHP code.  
    The table should be structured with columns for Serial Number (S.n.), Name, and Grade, 
    and it should look like this: </h3>
    <?php
    $g1=5;
    $g2=4;
    $G3=5;
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
      <th>Alice/th> 
      <th> <?php echo $g2?> </th>
   </tr>
   <tr>
      <th>3</th> 
      <th>Bob</th> 
      <th> <?php echo $g3?> </th>
   </tr>
</table>
 <h3>3.4Take a screenshot that confirms your 
    development environment setup and include it as an image in the "ex1.php" file.</h3>
<img src="24.png" alt="web development environment">
<?php include 'footer.php'; ?>
</body>
</html>
