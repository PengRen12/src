
<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; ?>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bootstrap Example Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
<style>
  a, .nav-link,.navbar-brand {
    color: white;
}
    </style>
</head>
<body>
  <div class="container" >
    <div class="row">
  <nav class="navbar navbar-expand-lg" style="background-color: rgb(65, 7, 109);" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex1.php">Task1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="layout.php">Task2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link2</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div> 
  <div class="row" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px;">
    <div class="col-sm-3" style="background-color: rgba(228, 235, 194, 0.353);">
      <h3>List of Tasks</h3>
      some thing here
    </div>
    <div class="col-sm-9">
      <h2>Hello world this is a new page </h2> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/440px-Bootstrap_logo.svg.png" align="right" height="150" width="150">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et temporibus, 
        ab rerum odio tempore doloribus recusandae molestias modi officiis deleniti neque aperiam tenetur, 
        sunt ipsa aliquam. Libero dolor voluptatibus inventore!</p>

        
      
      <p>Article Src: https://en.wikipedia.org/wiki/Bootstrap_(front-end_framework)</p>

    </div>
  </div>
  <div class="row">
<footer style="background-color: rgb(65, 7, 109); color: white;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright
  </div>
  <!-- Copyright -->
  <?php include 'footer.php'; ?>
</footer></div>
</div>

<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     
    </body>
    </html>

