<?php
include("../includes/connect.php");

if(isset($_POST['insert_cat'])){
  $cat_title=$_POST['brand_name'];
  $select="select * from `brands` where brand_name='$cat_title'";
  $result_select=mysqli_query($con,$select);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('This brand is already present')</script>";
  }else{
  $insert="insert into `brands` (brand_name) values ('$cat_title')"; 
  $result=mysqli_query($con,$insert);
  if($result){
    echo "<script>alert('Brand has been created successfully')</script>";}
  }
}
?>

<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-3">
  <span class="input-group-text bg-secondary" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_name" placeholder="Insert Brands" aria-label="Insert Brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-90 mb-2">
    
  <input type="submit"  name="insert_cat" value="Insert categories" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1" class="bg-dark border-0 p-2 text-white mt-2" >
</div>
</form>