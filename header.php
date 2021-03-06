<?php
require("connection.php");
require("function.php");
require("add_to_cart.php");

$sql = "SELECT * FROM categories WHERE status='1'";
$catArr = array();
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  $catArr[] = $row;
}
$obj=new add_to_cart();
$totalProduct=$obj->totalProduct();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Header</title>
  <link rel="icon" href="./images/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
  <link rel="stylesheet" type="text/css" href="./sidebar1.css">
  <link rel="stylesheet" type="text/css" href="./style.css">
  <link rel="stylesheet" type="text/css" href="./style3.css">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>


  </style>


</head>

<body>

  <div class="wrapper">

    <nav id="sidebar">
      <div id="dismiss">
        <i class="fas fa-arrow-left"></i>
      </div>

      <div class="sidebar-header">
        <!-- <img src="../images/dinesh.jpg" class="rounded" style="height:50px;width:50px;" alt=""> -->

        <?php if (isset($_SESSION['USER_LOGIN'])) { ?>

          <h5><a href="login.php" style="color: white;"><?php echo $_SESSION['USER_NAME']; ?></a></h5>
        <?php } else { ?>
          <h5><a href="login.php" style="color: white;">SignIn / Register</a></h5>
        <?php  } ?>

      </div>

      <ul class="list-unstyled components">
        <li class="active">
          <a class="color_change" href="index.php">Home</a>

        </li>
        <li>
          <a class="color_change" href="#">About</a>

          <a class="color_change" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Categories</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <?php
            foreach ($catArr as $list) {
            ?>
              <li>
                <a class="color_change" href="categories.php?id=<?php echo $list['id']; ?>"><?php echo $list['categories']; ?></a>
              </li>
            <?php } ?>
          </ul>
        </li>
        <li>
          <a class="color_change" href="myorder.php">My Orders</a>
        </li>
        <li>
          <a class="color_change" href="#">Today's offers</a>
        </li>
        <li>
          <a class="color_change" href="contact_us.php">Contact Us</a>
        </li>
      </ul>

      <ul class="list-unstyled CTAs">
        <li>
          <?php if(isset($_SESSION['USER_LOGIN'])){
            echo '<a href="logout.php" class="article">Log Out</a>';
          }
          ?>
        </li>
      </ul>
    </nav>
    <!-- <div id="content"> -->
    <!-- <div id="content"> -->


    <nav class="navbar navbar-expand-lg navbar-light" style="position:fixed;left:0;top:0;z-index:4;border-bottom:2px solid #FF9933;background-color:black;width:100%;">
      <button type="button" id="sidebarCollapse" class="btn mr-3 ba1" style="background-color:#FF9933;">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="#" class="navbar-brand">
        <h1 style="font-family:Arial;" class="text-white logo">Logo</h1>
      </a>
      <ul class="navbar-nav ml-auto">
        <div class="container">
          <li class="nav-item">
            <a href="#" class="nav-link"><i style="font-size:27px;color:white;" class="fas fa-search"></i></a>
          </li>

          <li class="ml-3 nav-item">
            <div class="dropdown">
              <?php if (isset($_SESSION['USER_LOGIN'])) { ?>
                <a class="nav-link text-white" href="index.php">
                  <h4 class="">
                    <i style="font-size:27px;" class="fas fa-user"></i>
                    <p class="pa1"> <?php echo $_SESSION['USER_NAME']; ?>
                      <i style="font-size:27px;" class="fas fa-caret-down pa1"></i>
                    </p>

                  </h4>
                </a>
              <?php } else { ?>
                <a class="nav-link text-white" href="login.php">
                  <h4 class="">
                    <i style="font-size:27px;" class="fas fa-user"></i>
                    <p class="pa1"> Sign In
                      <i style="font-size:27px;" class="fas fa-caret-down pa1"></i>
                    </p>

                  </h4>
                </a>

              <?php  } ?>
              <div class="pa1 dropdown show">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="text-dark dropdown-item" href="index.php">
                    <h4>Home</h4>
                  </a>
                  <a class="text-dark dropdown-item" href="login.php">
                    <h4>Account</h4>
                  </a>
                  <a class="text-dark dropdown-item" href="myorder.php">
                    <h4>My Order</h4>
                  </a>
                  <a class="text-dark dropdown-item" href="#">
                    <h4>Today's Deals</h4>
                  </a>
                  <a class="text-dark dropdown-item" href="#">
                    <h4>Settings</h4>
                  </a>
                  <a class="text-dark dropdown-item" href="contact_us.php">
                    <h4>24*7 help</h4>
                  </a><?php
                  if(isset($_SESSION['USER_NAME'])){ ?>
                  <a class="text-dark dropdown-item" href="logout.php">
                    <h4>Log Out</h4>
                  </a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </li>
          <li class="ml-3 nav-item"><a href="cart.php" class="nav-link active text-white">
              <h4 class="cart">
                <i class="fas fa-shopping-cart"></i>
                <p class="pa1"> Cart</p>
                <span id="cart_count" class="pa1 bg-light la1" style="color:#FF9933;"><?php echo $totalProduct; ?></span>
              </h4>
            </a>
          </li>

        </div>
      </ul>
    </nav>
    <!-- </div> -->
  </div>



  <div class="overlay"></div>
  <div style="margin-bottom:80px;visibility:hidden;">
    as
  </div>
  <?php if ($_SERVER["REQUEST_URI"] == "/myecom/index.php") { ?>
    <div class="mx-3 categories">
      <div style="font-family: myFirstFont;font-size:20px;" class="flex-container">
        <?php

        foreach ($catArr as $list) { ?>
          <a style="color:black;border-bottom:2px solid #ff9933;" href="categories.php?id=<?php echo $list['id']; ?>">
            <div class="align-items">
              <?php echo $list['categories']; ?>
            </div>
          </a>
        <?php } ?>
      </div>

    </div>
  <?php } else {
  }
  ?>


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