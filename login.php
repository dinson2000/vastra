<?php
require "connection.php";
// Login

if (isset($_POST['login'])) {
  $email = $_POST['val'];
  $ph = $_POST['val'];
  $password = $_POST['password'];
  $password = md5($password);

  $result = mysqli_query($conn, "select * from users where password='$password'");
  $row = mysqli_fetch_array($result);

  $username = $row['username'];

  if ($row['email'] == $email or $row['phone'] == $ph) {
    if ($row['password'] == $password) {
      echo "<script>alert('Login Successfull!!');</script>";
      $_SESSION['user_name'] = $username;
      header("location:index2.php");
    } else {
      echo "<script>alert('Wrong Password');</script>";
    }
  } else {
    echo "<script>alert('Wrong Email or Phone number');</script>";
  }
}


?>

<!DOCTYPE html>
<html>

<head>
  <title>Login/Register</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

</head>
<style>
  .field_error {
    color: red;
  }
  @font-face {
    font-family: myFirstFont;
    src: url("./Fonts/Montserrat-Regular.ttf");
}
</style>

<body style="font-family:myFirstFont;">
  <h1 class="text-weight-bold text-center mt-2">Log In | Sign Up</h1><br>
  <!-- <h5 class="text-weight-bold text-center">Not Registered?</br><a href="signup.php">Sign Up</a></h1>
  </h5> -->
  <div class="row mt-5">

    <div style="border-right: 2px solid #ff9933;" class="d-flex justify-content-center container-fluid col-md-6">
      <form method="POST" action="">
        <h1 class="text-weight-bold text-center " style="color:black;">LogIn here</h1><br>

        <div class="form-group row">
          <label for="email text" class="text-weight-bold mt-2">
            Email or Phone Number:
          </label>
          <input type="email text" class="form-control col-xl-12" id="login_email" name="login_email" placeholder="Enter email or number" required>
          <span class="field_error" id="login_email_error"></span>

        </div>
        <div class="form-group mt-4 row">
          <label for="password">Password :</label>
          <input type="password" class="form-control col-xl-12" placeholder="Enter Password" id="login_password" name="login_password">
          <span class="field_error" id="login_password_error"></span>
       
        </div>
        <div class="form-group">
          <div class="mt-4 row">
            <input type="button" onclick="user_login()"  class="col-xl-12 btn btn-block" style="background-color: #FF9933;" value="LogIn" name="login_user">
          </div>

        </div>
      </form>
    </div>
    <div class="d-flex justify-content-center  container-fluid col-md-6">

      <form method="post" action="">
        <h1 class="text-weight-bold text-center" style="color:black;">SignUp here</h1><br>
        <div class="form-group">

          <label for="text">
            Enter Full Name :
          </label>
          <input style="width: 400px" type="text" class="form-control " id="name" name="name" placeholder="Enter Name" required title="Only Alphabet">
          <span class="field_error" id="name_error"></span>

        </div>
        <div class="form-group">
          <label for="email" class="">
            Enter Email :
          </label>
          <input type="email" class="form-control " id="email" name="email" placeholder="Enter email" required>
          <span class="field_error" id="email_error"></span>
        </div>
        <div class="form-group">
          <label for="text">
            Enter Phone No :
          </label>
          <input style="width: 400px" type="text" id="phone" class="form-control " name="phone" placeholder="Enter phone no." required pattern="[0-9]{10}" title="Only Numeric">
          <span class="field_error" id="phone_error"></span>

        </div>

        <div class="form-group mt-1">
          <label for="password">Password :</label>
          <input type="password" class="form-control" placeholder="Enter Password" id="password" name="password" style="width: 400px;">
          <span class="field_error" id="password_error"></span>

        </div>

        <div class="form-group mt-1">
          <label for="text">Confirm Password :</label>
          <input type="text" class="form-control" id="cpassword" placeholder="Confirm Password" name="password2" style="width: 400px;" required>
        </div>
        <div class="form-group">
          <div class="input-group-append mt-4 align-items-center d-flex justify-content-center">
            <input type="button" class="btn btn-block" onclick="user_register()" style="background-color:#FF9933;color:black;" name="register_btn" value="Submit">

          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="js/jquery-3.5.1.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
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