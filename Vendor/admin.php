<?php
  require "connection.php";
  require "function.php";


	?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Vendor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">

<h4 style="font-size: 15px;" class="font-weight-bold"><a href="#a" style="color: white;"><img src="vendor.jpg" class="rounded-circle m-3" style="height:45px;width:45px;">Welcome <?php
      
      // $sql="SELECT name FROM users";
      // $query_run=mysqli_query($conn,$sql);
      
			echo $_SESSION['user_name']; 
			?></a></h4>

				<!-- <h1><a href="index.html" class="">VN</a></h1> -->
        <ul class="list-unstyled components mt-4 mb-5">

          <li class="active">
            <a href="categories.php" target="frame"><span class="fa fa-shopping-cart"></span> Categories</a>
          </li>
          <!-- <li>
              <a href="addarticle.php" target="frame"><span class="fa fa-user"></span>Add Article</a>
          </li> -->
          <li>
              <a href="product.php" target="frame"><span class="fa fa-product-hunt"></span>Product Master</a>
          </li>
          <li>
            <a href="#" target="frame"><span class="material-icons">&#xe0c9;</span> Order Master</a>
          </li>
          <li>
            <a href="#" target="frame"><span class="material-icons">&#xe0c9;</span> User Master</a>
          </li>
          <li>
            <a href="contact.php" target="frame"><span class="material-icons">&#xe0c9;</span> Contact Mater</a>
          </li>
        </ul>

       
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-2">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">Home</a>
                </li>
                <li class="nav-item">
        
              <a class="nav-link" href="managecategory.php" target="frame"><span class="fa fa-shopping-cart"></span>Add Category</a>

                </li>
                <li class="nav-item">
              <a class="nav-link" href="addproduct.php" target="frame"><span class="fa fa-product-hunt"></span>Add Product</a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Messages</a>
                </li>
              </ul>
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item ml-2">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
         <div>
           <h2 class="mb-2">Home Page Content</h2>
           <p>Click on side navbar to enable frame accordingly.</p>
             <div style="height: 100%;" class="embed-responsive embed-responsive-16by9">
               <iframe class="embed-responsive-item" name="frame" allowfullscreen></iframe>
              </div>
          </div>
      </div>
		</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>