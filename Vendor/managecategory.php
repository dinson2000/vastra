<?php
require "connection.php";
require "function.php";

$categories = "";
$msg="";
if(isset($_GET['id']) && $_GET['id']!=''){
$id = get_post($conn,$_GET['id']);
$result=mysqli_query($conn,"SELECT * FROM categories where id='$id'");
$check=mysqli_num_rows($result);
if($check>0){ 
  $row=mysqli_fetch_assoc($result);
  $categories=$row['categories'];
}else{
  header('location:categories.php');
  die();
}
}

if (isset($_POST['submit'])) { 

  $categories = get_post($conn,$_POST['category']);

  $result=mysqli_query($conn,"SELECT * FROM categories where categories='$categories'");
  $check=mysqli_num_rows($result);
  if($check>0){
    $msg="Category already Exist";
  }else{   
    if(isset($_GET['id']) && $_GET['id']!=''){
      mysqli_query($conn,"UPDATE categories set categories='$categories' where id='$id'");
    }
    else{
      
      mysqli_query($conn, "INSERT INTO categories (categories,status)VALUES('$categories','1')");
      
    }
    echo "<script>alert('Submitted !!');</script>";
    header('location:categories.php');
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

  <title>Add Category</title>
</head>

<body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <div class="container-fluid">
    <h4 class="display-4 mb-4">Add Category</h4>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Category Name:</label>
        <input required type="text" value="<?php echo $categories; ?>" class="form-control" id="exampleFormControlTextarea1" rows="1" name="category"></textarea>
      </div>
     <p class="text-danger"><?php echo $msg; ?></p>
      <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
      <button type="reset" class="btn btn-dark ml-3" name="submit1">Reset</button>
    </form>
  </div>

</body>

</html>