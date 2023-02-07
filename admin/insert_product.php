<?php
include("../includes/connect.php");
if(isset($_POST['insert_button'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keyword=$_POST['product_keyword'];
    $product_category=$_POST['product_categories'];
    $product_brand=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    $product_status='true';
    // accessing images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
    //temp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];
    // checking for null
    if($product_title=='' OR $product_description=='' OR $product_keyword=='' OR $product_category=='' OR $product_brand=='' OR $product_price=='' OR $product_image1=='' OR $product_image2=='' OR $product_image3==''){
        echo "<script>alert('Please fill all the fields')</script>";
        exit();
    }
    else{
        move_uploaded_file($temp_image1,"./product_image/$product_image1");
        move_uploaded_file($temp_image2,"./product_image/$product_image2");
        move_uploaded_file($temp_image3,"./product_image/$product_image3");

        $insert_product="insert into `products`(product_title,product_description,cat_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) values('$product_title','$product_description','$product_category','$product_brand','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
        $result=mysqli_query($con,$insert_product);
        if($result){
            echo "<script>alert(Product has been inserted successfully)</script>";
        }
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert-Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style.css -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
            <label class="form-table" form="product_title">Product Title</label>
            <input type="text" name="product_title" id="product_description" class="form-control" placeholder="Enter product title" autocomplete="off">
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
            <label class="form-table" form="product_description">Product Description</label>
            <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter product Description" autocomplete="off">
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
            <label class="form-table" form="product_keyword">Product Keyword</label>
            <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="Enter product keyword" autocomplete="off">
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
       <select name="product_categories" id="" class="form-select">
              <option value="">Select a Category</option>
              <?php
                    $select_query=" SELECT * FROM `categories` ";
                    $result=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $cat_id=$row['cat_id'];
                        $cat_title=$row['cat_title'];
                        echo "<option value='$cat_id'>$cat_title</option>";
                    }
                ?> 
       </select>
</div>
<div class="form-outline mb-4 w-50 m-auto">
       <select name="product_brands" id="" class="form-select">
              <option value="">Select a brand</option>
              <?php
                    $select_query="SELECT * FROM `brands`";
                    $result=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $cat_id=$row['brand_id'];
                        $cat_title=$row['brand_name'];
                        echo "<option value='$cat_id'>$cat_title</option>";
                    }
                ?>
       </select>
</div>
<div class="form-outline mb-4 w-50 m-auto">
            <label class="form-table" form="product_image1">Product Image1</label>
            <input type="file" name="product_image1" id="product_image1" class="form-control" placeholder="Enter product Image1" autocomplete="off">
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
            <label class="form-table" form="product_image2">Product Image2</label>
            <input type="file" name="product_image2" id="product_image2" class="form-control" placeholder="Enter product Image2" autocomplete="off">
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
            <label class="form-table" form="product_image3">Product Image3</label>
            <input type="file" name="product_image3" id="product_image3" class="form-control" placeholder="Enter product Image3" autocomplete="off">
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
            <label class="form-table" form="product_price">Product Price</label>
            <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off">
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
       <input type="submit" name="insert_button" class="btn btn-info mb-3 px-4 bg-secondary text-white" value="Insert Product">
    </div>
    </form>
    </div>
    

    
</body>
</html>