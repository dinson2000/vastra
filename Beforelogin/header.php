<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="sidebar1.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
  	<!-- <style>
  	div.container-fluid{
		  padding-left:0px;
		  padding-right:0px;
	  }
	  </style> -->
	  
</head>
<body>
	<?php include("sidebar.php"); ?>
<div class="container-fluid" style="margin-top:100px;">
	<div id="content">
		<!-- <nav class="navbar navbar-expand-lg navbar-light" style="border-bottom:2px solid #FF9933;background-color:black;"> -->
		<!-- Top fixed navbar -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="border-bottom:2px solid #FF9933;background-color:black;">
			<button type="button" id="sidebarCollapse" class="btn mr-3 ba1" style="background-color:#FF9933;">
				<span class="navbar-toggler-icon" onclick="openNav()"></span>
			</button>
				<a href="#" class="navbar-brand"><h1 style="font-family:Arial;" class="text-white logo">Logo</h1></a>
				<!-- <a href="#" class="navbar-brand"><img src="images/logo1.png" style="background:none;height:80px;width:200px;" alt=""></a> -->
				<!-- <a href="#" class="navbar-brand"><img src="images/logo.png" style="background:none;height:60px;width:60px;" alt=""></a> -->

			<!-- <button type="button" class="navbar-toggler" style="background-color:#FF9933;" data-toggle="collapse" data-target="#t1">
				<span class="navbar-toggler-icon "></span>
			</button> 
			 <div class="collapse navbar-collapse" id="t1"> -->
			<ul class="navbar-nav ml-auto">
				<!-- <li class="nav-item mt-2 mr-3 mb-2">
					<div class="input-group ">
                		<input class="form-control amber-border" type="text" placeholder="Search Here..." aria-label="Search">
                        	<div class="input-group-append">
                             	<i class="btn text-dark" style="background-color:#FF9933;" aria-hidden="true">Search</i>
       						</div>
    				</div>
				</li> -->
				<div class="container">
				<li class="nav-item">
					<a href="#" class="nav-link"><i style="font-size:27px;color:white;" class="fas fa-search"></i></a>
				</li>
				
				<li class="ml-3 nav-item">
						<div class="dropdown">
						<a class="nav-link text-white" href="login.php"><h4 class=""><i style="font-size:27px;" class="fas fa-user"></i><p class="pa1 dropdown-toggle"> Sign In</p></h4></a>	
						<div class="pa1 dropdown show">
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="text-dark dropdown-item" href="index1.php"><h4>Home</h4></a>
						    <a class="text-dark dropdown-item" href="login.php"><h4>Account</h4></a>
						    <a class="text-dark dropdown-item" href="login.php"><h4>Order</h4></a>
						    <a class="text-dark dropdown-item" href="#"><h4>Today's Deals</h4></a>
						    <a class="text-dark dropdown-item" href="#"><h4>Settings</h4></a>
						    <a class="text-dark dropdown-item" href="#"><h4>24*7 help</h4></a>
						  </div>
						</div>
				</div>		
			</li>
				<li class="ml-3 nav-item"><a href="thisIsCart.php" class="nav-link active text-white">
                    <h4 class="cart">
                        <i class="fas fa-shopping-cart"></i><p class="pa1"> Cart</p>
                        <span id="cart_count" class="pa1 bg-light" style="color:#FF9933;">0</span>
                    </h4>
                </a>
			</li>
			</div>
			</ul>

		<!-- </div>	 -->
			</nav>	
		</div>

</body>

</html>