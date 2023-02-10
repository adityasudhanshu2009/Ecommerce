<?php
include("includes/connect.php");
function getBrands(){
    global $con;
          $select_brands="select * from `brands`";
          $result=mysqli_query($con,$select_brands);
        while($row_data=mysqli_fetch_assoc($result)){
          $brand_title=$row_data['brand_name'];
          $brand_id=$row_data['brand_id'];
          echo "<li class='nav-item'>
          <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
      </li>";
        }
}


// getting categories
function getCategories(){
    global $con;

    $select_brands="select * from `categories`";
          $result=mysqli_query($con,$select_brands);
        while($row_data=mysqli_fetch_assoc($result)){
          $brand_title=$row_data['cat_title'];
          $brand_id=$row_data['cat_id'];
          echo "<li class='nav-item'>
          <a href='index.php?category=$brand_id' class='nav-link text-light'>$brand_title</a>
      </li>";
        }
}

// getting products
function getProducts(){
    global $con;
    if(!isset($_GET['category']) && !isset($_GET['brands'])){
    $query="select * from `products`";
            $result=mysqli_query($con,$query);
            while($row=mysqli_fetch_assoc($result)){
              $product_id=$row['product_id'];
              $product_title=$row['product_title'];
              $product_description=$row['product_description'];
              $product_image=$row['product_image1'];
              $product_price=$row['product_price'];
              $cat_id=$row['cat_id'];
              $brand_id=$row['brand_id'];
              echo "<div class='col-md-4'>
              <div class='card'>
                <img src='./admin/product_image/$product_image' class='card-img-top' alt='...'>
                  <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-primary'>Add to Cart</a>
                    <a href='#' class='btn btn-outlined-secondary'>View</a>
                  </div>
                </div>
            </div>";

            }
}
    }

    // getting uniquee products
    function get_unique_products(){
        global $con;
        if(isset($_GET['category'])){
          $category=$_GET['category'];
        $query="select * from `products` where `cat_id`='$category'";
                $result=mysqli_query($con,$query);
                $rows=mysqli_num_rows($result);
                if($rows==0){
                  echo "<h2 class='text-center'>No Products Found of this category</h2>";
                }
                while($row=mysqli_fetch_assoc($result)){
                  $product_id=$row['product_id'];
                  $product_title=$row['product_title'];
                  $product_description=$row['product_description'];
                  $product_image=$row['product_image1'];
                  $product_price=$row['product_price'];
                  $cat_id=$row['cat_id'];
                  $brand_id=$row['brand_id'];
                  echo "<div class='col-md-4'>
                  <div class='card'>
                    <img src='./admin/product_image/$product_image' class='card-img-top' alt='...'>
                      <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-primary'>Add to Cart</a>
                        <a href='#' class='btn btn-outlined-secondary'>View</a>
                      </div>
                    </div>
                </div>";
    
                }
    }
        }
        function get_unique_brands(){
          global $con;
          if(isset($_GET['brands'])){
            $category=$_GET['brands'];
          $query="select * from `products` where `brand_id`='$category'";
                  $result=mysqli_query($con,$query);
                  $rows=mysqli_num_rows($result);
                  if($rows==0){
                    echo "<h2 class='text-center'>No Products Found of this brand</h2>";
                  }
                  while($row=mysqli_fetch_assoc($result)){
                    $product_id=$row['product_id'];
                    $product_title=$row['product_title'];
                    $product_description=$row['product_description'];
                    $product_image=$row['product_image1'];
                    $product_price=$row['product_price'];
                    $cat_id=$row['cat_id'];
                    $brand_id=$row['brand_id'];
                    echo "<div class='col-md-4'>
                    <div class='card'>
                      <img src='./admin/product_image/$product_image' class='card-img-top' alt='...'>
                        <div class='card-body'>
                          <h5 class='card-title'>$product_title</h5>
                          <p class='card-text'>$product_description</p>
                          <a href='#' class='btn btn-primary'>Add to Cart</a>
                          <a href='#' class='btn btn-outlined-secondary'>View</a>
                        </div>
                      </div>
                  </div>";
      
                  }
      }
          }
?>