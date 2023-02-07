<?php
include("includes/connect.php");
include("functions\common_function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopy</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style.css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <img src="Images/Logo.png" alt="logo" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--second child -->
<nav class="navbar navbar-expand-lg  navbar-outlined-secondary bg-light">
    <ul class="navbar-nav me-auto ">
    <li class="nav-item pl-10">
          <a class="nav-link active" aria-current="page" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Log In</a>
        </li>
    </ul>
</nav>
<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">Stores</h3>
    <p class="text-center">Anything. Anytime. Anywhere.</p>
</div>

<!-- fourth child -->
<div class="row">
    <div class="col-md-2 bg-dark p-0">
        <!-- Brands -->
        <ul class="navbar-nav text-center me-auto">            
        <li class="nav-item bg-light">
                <a href="#" class="nav-link"><h5>Brands</h5></a>
            </li>
            <?php
          getBrands();
        ?>
        </ul>
        <!-- Categories -->
        <ul class="navbar-nav text-center me-auto">
            <li class="nav-item bg-light">
                <a href="#" class="nav-link"><h5>Categories</h5></a>
            </li>
            <?php
          getCategories();
        ?>
        </ul>
    </div>
      <div class="col-md-10">
          <div class="row">
            <!-- fetching products -->
            <?php
            getProducts(); 
            
            ?>
            
       
        </div>
    </div>
</div>










<!-- Last child -->
<div class="bg-dark p-3 text-center">
<p class="footer">All rights reserved. Designed and Developed : ADITYA SUDHANSHU</p>
</div>
   </div>
    


<!-- js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>