<?php
include("../includes/connect.php");

if(isset($_POST['insert_cat'])){
  $cat_title=$_POST['cat_title'];
  $select="select * from `categories` where cat_title='$cat_title'";
  $result_select=mysqli_query($con,$select);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('This category is already present')</script>";
  }else{
  $insert="insert into `categories` (cat_title) values ('$cat_title')"; 
  $result=mysqli_query($con,$insert);
  if($result){
    echo "<script>alert('Category has been created successfully')</script>";}
  }
}
?>



<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-3">
  <span class="input-group-text bg-secondary" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Insert Categories" aria-describedby="basic-addon1">
</div>
<div class="input-group w-90 mb-2">
    
  <input type="submit" name="insert_cat" value="Insert categories" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1" class="bg-dark border-0 p-2 text-white mt-3" >
</div>
</form>