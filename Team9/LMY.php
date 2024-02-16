<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Information Form</title>
  <?php require_once 'header.php'; ?>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      margin-top: 50px;
    }

    form {
      max-width: 600px;
      margin: auto;
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="text-center mb-4">Welcome! Please fill in your information below.</h2>


  <form name="form1" method="post" action="process.php">
    <div class="mb-3">
      <label for="fname" class="form-label">First Name</label>
      <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" required>
    </div>

    <div class="mb-3">
      <label for="lname" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" required>
    </div>

    <div class="mb-3">
      <label for="Email" class="form-label">Email</label>
      <input type="email" class="form-control" id="Email" placeholder="Email" name="email" required>
    </div>

    <div class="mb-3">
      <label for="birth" class="form-label">Date of Birth</label>
      <input type="date" class="form-control" id="birth" name="birth" required>
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="tel" class="form-control" id="phone" placeholder="Phone" name="phone" required>
    </div>

    <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      <select class="form-select" id="gender" name="gender" required>
        <option value="" disabled selected>Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


<script>
  document.addEventListener("DOMContentLoaded", function () {

    var form = document.forms["form1"];


    var phoneInput = form["phone"];
    var genderInput = form["gender"];


    phoneInput.addEventListener("blur", function () {
      validatePhoneInput(phoneInput);
    });

    genderInput.addEventListener("blur", function () {
      validateGenderInput(genderInput);
    });


    form.addEventListener("submit", function (event) {

      event.preventDefault();


      validatePhoneInput(phoneInput);
      validateGenderInput(genderInput);


      if (form.checkValidity()) {

        alert("Form submitted successfully!");

      } else {
        alert("Please fill in all required fields correctly.");
      }
    });

    function validatePhoneInput(input) {

  var phoneRegex = /^(?:\(\d{3}\)|\d{3}[.-]?)?\d{3}[.-]?\d{4}$/;

  if (!phoneRegex.test(input.value)) {
    input.setCustomValidity("请输入有效的电话号码。");
  } else {
    input.setCustomValidity("");
  }
}



    function validateGenderInput(input) {
      if (input.value === "") {
        input.setCustomValidity("Please select a gender.");
      } else {
        input.setCustomValidity("");
      }
    }
  });
</script>


<?php require_once 'footer.php'; ?>
</body>
</html>
