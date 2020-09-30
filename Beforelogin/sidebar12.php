<!DOCTYPE html>
<html>
<head>
	<title>Sidebar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="./sidebar1.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"><!-- BootStrap CDN -->
  
</head>
<body>
<div class="wrapper">
		<nav id="sidebar" >
			<div class="sidebar-header">   
		
			</div>
			<ul class="list-unstyled components p-3">
				<li class="mb-4"><a class="text-dark" href="index1.php"><h4>Home</h4></a></li>
				<li class="mb-4"><a class="text-dark" href="login.php"><h4>Account</h4></a></li>
				<li class="mb-4"><a class="text-dark" href="login.php"><h4>Order</h4></a></li>
				<li class="mb-4"><a class="text-dark" href="#"><h4>Today's Deals</h4></a></li>
				<li class="mb-4"><a class="text-dark" href="#"><h4>Settings</h4></a></li>
				<li class="mb-4"><a class="text-dark" href="#"><h4>24*7 help</h4></a></li>
			</ul>
		</nav>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  	<script>
  	$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    	});
	});
  	</script>
</html>