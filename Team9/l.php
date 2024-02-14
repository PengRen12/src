<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<?php require_once 'header.php'; ?>
</head>
<body>

<p>Welcome,Please fill your infomation below</p >

<!-- firstname -->
<form name="form1" method="post" action="process.php">
  <div class="mb-3">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname"> 
  </div>
  <!-- lastname -->
  <div class="mb-3">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname"> 
  </div>
  <!-- email -->
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="text" class="form-control" id="Email" placeholder="Email" name="email">
  </div>
  <!-- date of birth -->
  Birth:
  <input type="date" class="form-select" aria-label="Default select example" name="birth"><br>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

  <?php require_once 'footer.php'; ?>
</body>
</html>