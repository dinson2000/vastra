<?php
require "connection.php";
require "function.php";
$name='';
$image='';
$type='';
$gender='';
$quantity='';
$brand='';
$sleeve='';
$fabric='';
$pack_of='';
$size='';
$rating='';
$disc_price='';
$real_price='';
$neck_type='';
$category='';
$colour=
$categories = "";
$msg="";
if(isset($_GET['id']) && $_GET['id']!=''){
$id = get_post($conn,$_GET['id']);
$result=mysqli_query($conn,"SELECT * FROM product where id='$id'");
$check=mysqli_num_rows($result);
if($check>0){ 
  $row=mysqli_fetch_assoc($result);
  $categories=$row['categories'];
}else{
  header('location:product.php');
  die();
}
}

if (isset($_POST['submit'])) { 

  $name = get_post($conn,$_POST['p_name']);
  
  $image_temp = $_FILES['image']['tmp_name'];
  $image = $_FILES['image']['name'];
  $target = "images/" . basename($image);
  $type = get_post($conn,$_POST['type']);
  $categories_id = get_post($conn,$_POST['categories_id']);
  $gender = get_post($conn,$_POST['gender']);
  $quantity = get_post($conn,$_POST['quantity']);
  $brand = get_post($conn,$_POST['brand']);
  $sleeve = get_post($conn,$_POST['sleeve']);
  $fabric = get_post($conn,$_POST['fabric']);
  $pack_of = get_post($conn,$_POST['pack_of']);
  $size = get_post($conn,$_POST['size']);
  $rating = get_post($conn,$_POST['rating']);
  $disc_price = get_post($conn,$_POST['disc_price']);
  $real_price = get_post($conn,$_POST['real_price']);
  $neck_type = get_post($conn,$_POST['neck_type']);
  $category = get_post($conn,$_POST['category']);
  $colour = get_post($conn,$_POST['colour']);


  $result=mysqli_query($conn,"SELECT * FROM product where name='$name'");
  $check=mysqli_num_rows($result);
  if($check>0){
    if(isset($_GET['id']) && $_GET['id']!=''){
      $getData=mysqli_fetch_assoc($result);
      if($id==$getData['id']){

      }else{
        $msg="Product already Exist";
       }
      }else{
        $msg="Product already Exist";
      }
    } 
    if($msg=''){
      if(isset($_GET['id']) && $_GET['id']!=''){
        mysqli_query($conn,"UPDATE product set categories_id='$categories_id',name='$name',image='$image',type='$type',colour='$colour',genderfor='$gender',qty='$quantity',brand='$brand',sleeve='$sleeve',fabric='$fabric',packof='$pack_of',size='$size',rating='$rating',realprice='$real_price',offeredprice='$disc_price',necktype='$neck_type',category='$category' where id='$id'");
      }
      else{
        
        mysqli_query($conn, "INSERT INTO product (categories_id,name,type,colour,genderfor,qty,brand,sleeve,fabric,packof,size,rating,realprice,offeredprice,necktype,status,category)VALUES('$categories_id','$name','$type','$colour','$gender','$quantity','$brand','$sleeve','$fabric','$pack_of','$size','$rating','$real_price','$disc_price','$neck_type','1','$category')");
        
      }
      echo "<script>alert('Submitted !!');</script>";
      header('location:product.php');
      die();
      

    }   
  }

?>