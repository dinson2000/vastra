<?php
require "connection.php";
require "function.php";
$name = '';
$image = '';
$type = '';
$gender = '';
$quantity = '';
$brand = '';
$sleeve = '';
$fabric = '';
$pack_of = '';
$size = '';
$rating = '';
$disc_price = '';
$real_price = '';
$neck_type = '';
$category = '';
$colour = "";
$categories = "";
$msg = "";
// $msg1 = "";
if (isset($_GET['id']) && $_GET['id'] != '') {
  $id = get_post($conn, $_GET['id']);
  $result = mysqli_query($conn, "SELECT * FROM product where id='$id'");
  $check = mysqli_num_rows($result);
  if ($check > 0) {
    $row = mysqli_fetch_assoc($result);
    $categories_id = $row['categories_id'];
    $name = $row['name'];
    $image = $row['image'];
    $type = $row['type'];
    $colour = $row['colour'];
    $gender = $row['genderfor'];
    $quantity = $row['qty'];
    $rating = $row['rating'];
    $brand = $row['brand'];
    $sleeve = $row['sleeve'];
    $fabric = $row['fabric'];
    $pack_of = $row['packof'];
    $size = $row['size'];
    $real_price = $row['realprice'];
    $disc_price = $row['offeredprice'];
    $neck_type = $row['necktype'];
    $category = $row['category'];
  } else {
    header('location:product.php');
    die();
  }
}

if (isset($_POST['submit'])) {

  $name = get_post($conn, $_POST['p_name']);


  $type = get_post($conn, $_POST['type']);
  $categories_id = get_post($conn, $_POST['categories_id']);
  $gender = get_post($conn, $_POST['gender']);
  $quantity = get_post($conn, $_POST['quantity']);
  $brand = get_post($conn, $_POST['brand']);
  $sleeve = get_post($conn, $_POST['sleeve']);
  $fabric = get_post($conn, $_POST['fabric']);
  $pack_of = get_post($conn, $_POST['pack_of']);
  $image = $_FILES['image']['name'];
  $image_temp = $_FILES['image']['tmp_name'];

  $size = get_post($conn, $_POST['size']);
  $rating = get_post($conn, $_POST['rating']);
  $disc_price = get_post($conn, $_POST['disc_price']);
  $real_price = get_post($conn, $_POST['real_price']);
  $neck_type = get_post($conn, $_POST['neck_type']);
  $category = get_post($conn, $_POST['category']);
  $colour = get_post($conn, $_POST['colour']);


  $result = mysqli_query($conn, "SELECT * FROM product where name='$name'");
  $check = mysqli_num_rows($result);
  if ($check > 0) {
    if (isset($_GET['id']) && $_GET['id'] != '') {
      $getData = mysqli_fetch_assoc($result);
      if ($id == $getData['id']) {
      } else {
        $msg = "Product already Exist";
      }
    } else {
      $msg = "Product already Exist";
    }
  }

  if ($_FILES['image']['type'] != '' && ($_FILES['image']['type'] != 'image/jpg' || $_FILES['image']['type'] != 'image/png' || $_FILES['image']['type'] != 'image/jpeg' || $_FILES['image']['type'] != 'image/JPG' || $_FILES['image']['type'] != 'image/PNG' || $_FILES['image']['type'] != 'image/JPEG')) {
    $msg1="Please select jpg,png,jpeg and JPG,PNG,JPEG format";
  }
// prx($_FILES);
  if ($msg == '') {
    if (isset($_GET['id']) && $_GET['id'] != '') {
      if ($_FILES['image']['name'] != '') {

        $image = $_FILES['image']['name'];
        move_uploaded_file($image_temp, PRODUCT_IMAGE_SERVER_PATH . $image);
        $update_sql = "UPDATE product set categories_id='$categories_id',name='$name',image='$image',type='$type',
          colour='$colour',genderfor='$gender',qty='$quantity',brand='$brand',sleeve='$sleeve',fabric='$fabric',
          packof='$pack_of',size='$size',rating='$rating',realprice='$real_price',
          offeredprice='$disc_price',necktype='$neck_type',category='$category' where id='$id'";
      } else {
        $update_sql = "UPDATE product set categories_id='$categories_id',name='$name',type='$type',
          colour='$colour',genderfor='$gender',qty='$quantity',brand='$brand',sleeve='$sleeve',fabric='$fabric',
          packof='$pack_of',size='$size',rating='$rating',realprice='$real_price',
          offeredprice='$disc_price',necktype='$neck_type',category='$category' where id='$id'";
      }
      mysqli_query($conn, $update_sql);
    } else {
      $image_temp = $_FILES['image']['tmp_name'];
      $image = $_FILES['image']['name'];
      $target = "images/" . basename($image);
      move_uploaded_file($image_temp, PRODUCT_IMAGE_SERVER_PATH . $image);
      mysqli_query($conn, "INSERT INTO product (categories_id,name,image,type,colour,genderfor,qty,brand,sleeve,fabric,packof,size,rating,realprice,offeredprice,necktype,status,category)VALUES('$categories_id','$name','$image','$type','$colour','$gender','$quantity','$brand','$sleeve','$fabric','$pack_of','$size','$rating','$real_price','$disc_price','$neck_type','1','$category')");
    }
    echo "<script>alert('Submitted !!');</script>";
    header('location:product.php');
    die();
  }
}

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
        <p class="text-danger mt-2"> <?php echo $msg; ?></p>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Product Name:</label>
        <input type="text" class="form-control" id="productName" rows="1" value="<?php echo $name; ?>" name="p_name"></textarea>
        <p id="characterLimit" class="mt-1 text-danger">You are allowed to enter upto 35 characters.</p>
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Choose Image:</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" value="<?php echo $image; ?>" name="image">
      </div>
      
      <div class="form-group">
        <label for="type">Select Type:</label>
        <select class="form-control" name="categories_id">
          <?php
          $sql = "SELECT id,categories from categories order by categories asc";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            if ($row['id' == $categories_id]) {
              echo "<option selected value='.$row[id].'>" . $row['categories'] . "</option>";
            } else {

              echo "<option value='.$row[id].'>" . $row['categories'] . "</option>";
            }
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Colour:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?php echo $colour; ?>" name="colour"></textarea>
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
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?php echo $quantity; ?>" name="quantity"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Brand:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?php echo $brand; ?>" name="brand"></textarea>
      </div>
      <div class="form-group">
        <label for="type">Select Sleeve Type:</label>
        <select class="form-control" name="sleeve" id="sel1">
          <option value="<?php echo $sleeve; ?>"><?php echo $sleeve; ?></option>
          <option value="Half Sleeve">Half Sleeve</option>
          <option value="Full Sleeve">Full Sleeve</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Fabric:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?php echo $fabric; ?>" name="fabric"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Pack of:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?php echo $pack_of; ?>" name="pack_of"></input>
      </div>
      <div class="form-group">
        <label for="type">Select Size:</label>
        <select class="form-control" name="size" id="sel1">
          <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
          <option value="S">S</option>
          <option value="M">M</option>
          <option value="L">L</option>
          <option value="XL">XL</option>
          <option value="XXL">XXL</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Rating:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?php echo $rating; ?>" name="rating"></input>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Discounted Price:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?php echo $disc_price; ?>" name="disc_price"></input>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Real Price:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?php echo $real_price; ?>" name="real_price"></input>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Neck Type:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?php echo $neck_type; ?>" name="neck_type"></input>
      </div>
      <div class="form-group">
        <label for="type">Category(LIMITED,NEW,BEST,FEW):</label>
        <select class="form-control" name="category" id="sel1">
          <option value="<?php echo $category; ?>"><?php echo $category; ?></option>

          <option value="LIMITED">LIMITED</option>
          <option value="NEW">NEW</option>
          <option value="BEST">BEST</option>
          <option value="FEW">FEW</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <button type="reset" class="btn btn-dark ml-3" name="submit1">Reset</button>
    </form>
  </div>
  <script>
  let productName=document.getElementById("productName");
  let characterLimit=document.getElementById("characterLimit");
      characterLimit.style.display="none"; 
    productName.addEventListener('keydown',function(e){
      if(productName.value.length>=35 && e.keyCode!==46 && e.keyCode!==8){
        characterLimit.style.display="block";
        e.preventDefault();
      }else{
        characterLimit.style.display="none";
      }
    });
    

</script>
</body>


</html>