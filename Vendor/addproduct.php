<?php
require "connection.php";
require "function.php";
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
    /*.container{ width:50%; height:80%;}*/
  </style>

  <title>Add Product</title>
</head>

<body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <div class="container-fluid">
    <h4 class="display-4 mb-4">Add Product</h4>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Product Name:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="p_name"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Choose Image:</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
      </div>
      <div class="form-group">
        <label for="type">Select Type:</label>
        <select class="form-control" name="type" id="sel1">
          <option value="T-shirt">T-shirt</option>
          <option value="Shirts">Shirts</option>
          <option value="Full Sleeves">Full Sleeves</option>
          <option value="Vests">Vests</option>
          <option value="Hoodies">Hoodies</option>
          <option value="Jackets">Jackets</option>

        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Colour:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="colour"></textarea>
      </div>
      <div class="form-group">
        <label for="type">Select Gender:</label>
        <select class="form-control" name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Quantity:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="quantity"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Brand:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="brand"></textarea>
      </div>
      <div class="form-group">
        <label for="type">Select Sleeve Type:</label>
        <select class="form-control" name="sleeve" id="sel1">
          <option value="Half Sleeve">Half Sleeve</option>
          <option value="Full Sleeve">Full Sleeve</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Fabric:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="fabric"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Pack of:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="pack_of"></input>
      </div>
      <div class="form-group">
        <label for="type">Select Size:</label>
        <select class="form-control" name="size" id="sel1">
          <option value="S">S</option>
          <option value="M">M</option>
          <option value="L">L</option>
          <option value="XL">XL</option>
          <option value="XXL">XXL</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Rating:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="rating"></input>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Discounted Price:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="disc_price"></input>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Real Price:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="real_price"></input>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Neck Type:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="neck_type"></input>
      </div>
      <div class="form-group">
        <label for="type">Category(LIMITED,NEW,BEST,FEW):</label>
        <select class="form-control" name="category" id="sel1">
          <option value="LIMITED">LIMITED</option>
          <option value="NEW">NEW</option>
          <option value="BEST">BEST</option>
          <option value="FEW">FEW</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
      <button type="reset" class="btn btn-dark ml-3" name="submit1">Reset</button>
    </form>
  </div>
  <?php
  $msg = "";
  if (isset($_POST['submit'])) {
    $name = get_post($conn,$_POST['p_name']);

    $image_temp = $_FILES['image']['tmp_name'];
    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);

    $type = get_post($conn,$_POST['type']);
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
    // $description = get_post($conn,$_POST['description']);
    

    $sql = "INSERT INTO product (name,image,type,colour,genderfor,qty,brand,sleeve,fabric,packof,size,rating,realprice,offeredprice,necktype,status,category)VALUES('$name','$image','$type','$colour','$gender','$quantity','$brand','$sleeve','$fabric','$pack_of','$size','$rating','$real_price','$disc_price','$neck_type','1','$category')";
    $query_run = mysqli_query($conn, $sql);

    if (move_uploaded_file($image_temp, $target)) {
      $msg = "Image uploaded successfully";
      // echo "done";
      if ($query_run) {
        echo "<script>alert('Your Product is added successfully!!');</script>";
      } else {
        echo "<script>alert('Try Again');</script>";
      }
    } else {
      $msg = "Failed to upload image";
      echo "<script>alert('$msg');</script>";
      // print_r($_FILES['image']);

    }
  }
  ?>

</body>

</html>