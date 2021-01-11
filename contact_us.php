<?php
// require "connection.php";
// require "function.php";
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
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style3.css">
    <link rel="stylesheet" href="./sidebar1.css">
    <title>Contact Us</title>
  </head>
  <body>
  <?php include "./header.php"; ?>
  <div style="text-align:center;" class="mt-3">
    <h1 style="border-bottom:3px solid #FF9933;display:inline">Contact Us</h1>
  </div>
  <form class="p-4" method="POST" action="">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name :</label>
    <input type="text" class="form-control" name="name" placeholder="Name">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1">Phone No. :</label>
    <input type="number" class="form-control" name="number" placeholder="Registered Phone Number">
  </div>
  

  <div class="form-group">
    <label for="exampleFormControlInput1">Email Address :</label>
    <input type="email" class="form-control" name="email" placeholder="Registered Email Address">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message :</label>
    <textarea class="form-control" name="message" placeholder="Enter your query here..." rows="3"></textarea>
  </div>
  <div class="form-group text-center">
   <input type="submit" style="background-color: #FF9933;" class="btn btn-md" name="submit" value="Submit">
   <input type="reset" style="background-color: #FF9933;" class="btn btn-md" value="Reset">
    </div>
</form>

    <?php include "footer.php"; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $("#sidebar").mCustomScrollbar({
          theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function() {
          $('#sidebar').removeClass('active');
          $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function() {
          $('#sidebar').addClass('active');
          $('.overlay').addClass('active');
          $('.collapse.in').toggleClass('in');
          $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
      });
    </script>



  </body>
</html>