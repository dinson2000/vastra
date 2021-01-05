<?php
require "connection.php";
require "function.php";
if(isset($_POST['submit'])){
    $name=get_post($conn,$_POST['name']);
    $number=get_post($conn,$_POST['number']);
    $email=get_post($conn,$_POST['email']);
    $message=get_post($conn,$_POST['message']);
    $added_on=date("Y-m-d");
    $sql="INSERT INTO contact_us (name,number,email,message,added_on)VALUES('$name','$number','$email','$message','$added_on')";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Your message is submitted successfully');</script>";
    }else{
        echo "<script>alert('Try again');</script>";

    }

}   
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="Beforelogin/style.css">
    <link rel="stylesheet" href="Beforelogin/sidebar1.css">
    <title>Contact Us</title>
  </head>
  <body>
  <?php include "./Beforelogin/header.php"; ?>
  <div style="text-align:center;" class="mt-3">
    <h1 style="border-bottom:3px solid #FF9933;display:inline">Contact Us</h1>
  </div>
  <form class="p-4" method="POST" action="">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Name">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1">Phone No. :</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="number" placeholder="Registered Phone Number">
  </div>
  

  <div class="form-group">
    <label for="exampleFormControlInput1">Email Address :</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Registered Email Address">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message :</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" placeholder="Enter your query here..." rows="3"></textarea>
  </div>
  <div class="form-group text-center">
   <input type="submit" style="background-color: #FF9933;" class="btn btn-md" name="submit" value="Submit">
   <input type="reset" style="background-color: #FF9933;" class="btn btn-md" value="Reset">
    </div>
</form>

    <?php include "footer.php"; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
 

  </body>
</html>