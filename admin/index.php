


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- css link -->
    <link rel="stylesheet" href="../style.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <img src="../images/Logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="navbar-item">
                            <a href="#" class="nav-link text-light">Welcome Guest</a>
                        </li>
                    </ul>

                </nav>
            </div>
        </nav>
        <!-- second child -->
        <div class="text-center bg-light p-2"><h3>Manage Details</h3></div>

        <div class="row">
            <div class="col-md-12 bg-secondary p-4  d-flex align-items-center">
                <div >
                    <a href="#"><img src="../images/vegetables.jpg." alt="" class="admin-image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center mb-4">
                    <button class="my-3"><a href="insert_product.php" class="nav-link bg-dark p-2 text-light">Insert Products</a></button>
                    <button><a href="" class="nav-link bg-dark p-2 text-light">View Products</a></button>
                    <button><a href="index.php?insert_categories" class="nav-link bg-dark p-2 text-light">Insert Categories</a></button>
                    <button><a href="" class="nav-link bg-dark p-2 text-light">View Categories</a></button>
                    <button><a href="index.php?insert_brands" class="nav-link bg-dark p-2 text-light">Insert Brands</a></button>
                    <button><a href="" class="nav-link bg-dark p-2 text-light">View Brands</a></button>
                    <button><a href="" class="nav-link bg-dark p-2 text-light">All Orders</a></button>
                    <button><a href="" class="nav-link bg-dark p-2 text-light">All Payments</a></button>
                    <button><a href="" class="nav-link bg-dark p-2 text-light">List Users</a></button>
                    <button><a href="" class="nav-link bg-dark p-2 text-light">Log out</a></button>
                </div>
            </div>
        </div>
        <!-- fourth child -->
        <div class="container my-4">
            <?php
            if(isset($_GET['insert_categories'])){
                include("insert_categories.php");
            }
            ?>
        </div>
        <div class="container my-4">
            <?php
            if(isset($_GET['insert_brands'])){
                include("insert_brands.php");
            }
            ?>
        </div>
        <!-- footer -->
        <div class="bg-dark p-3 text-center">
<p class="footer">All rights reserved. Designed and Developed : ADITYA SUDHANSHU</p>
</div>
    </div>
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>