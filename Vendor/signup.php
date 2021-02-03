<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"><!-- BootStrap CDN -->
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  	
  	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	
<div class="container mt-4 " style="border: 2px solid #3E64FF;border-radius:20px;">
	
	<div class="d-flex justify-content-center align-items-center container mt-3" style="border-radius:2%;width:450px;background-color:white;">
	<form method="post" action="" >
	<h1 class="text-weight-bold text-center mt-2" style="color:black;">SignUp here</h1><br>
	<div class="form-group">
	
				<label for="text">
					Enter Full Name :
				</label>
				<input style="width: 400px" type="text" class="form-control " name="username" placeholder="Enter Name" required title="Only Alphabet">
			
			</div>
			<div class="form-group">
				<label for="email" class="">
					Enter Email :
				</label>
				<input  type="email" class="form-control " name="email" placeholder="Enter email" required>
			
			</div>
			<div class="form-group">
				<label for="text">
					Enter Phone No :
				</label>
				<input style="width: 400px" type="text" class="form-control " name="phone" placeholder="Enter phone no." required pattern="[0-9]{10}" title="Only Numeric">
			</div>
			<div class="form-check-inline">
<label for="text">Gender :   
  <label class="form-check-label">
    <input type="radio" class="form-check-input ml-3" name="gender" value="male">Male
  </label>
</div>
<div class="form-check-inline">
				
  <label class="form-check-label">
    <input type="radio" class="form-check-input ml-3" name="gender" value="female">Female
  </label>
  </label>
</div>
			    <div class="form-group mt-1">
				<label for="password">Password :</label>
				<input type="password" class="form-control" placeholder="Enter Password" name="password" style="width: 400px;" required pattern="[a-z A-Z 0-9 @ # % *]{6,400}" title="Min length of password is 6 and one special character">
			</div>
			<div class="form-group mt-1">
				<label for="text">Confirm Password :</label>
				<input type="password" class="form-control" placeholder="Confirm Password" name="password2" style="width: 400px;" required>
			</div>
			 <div class="form-group"> 
				    <div class="input-group-append mt-4 align-items-center d-flex justify-content-center">
       	<input type="submit" class="btn btn-block font-weight-bold" style="background-color:#3E64FF;color:black;" name="register_btn" value="Submit">
       
       </div>
     </div> 
   </form>
		
</div>
<?php
//connect to database
require "connection.php";
if(isset($_POST['register_btn']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	if($password==$password2 && $username!=NULL && $email!=NULL && $phone!=NULL)
	{
		//create user
		// $password=md5($password2);
		$sql="INSERT INTO admin_users (username,password) VALUES('$username','$password')";
		$query_run = mysqli_query($conn,$sql);
		if($query_run)
                {
                    echo '<script type="text/javascript">alert("Welcome User!!!")</script>';
					header("location:login.php");
                }
                else
                {
					$res = mysqli_query($conn,"select phone from users");
					if($res-> num_rows > 0)
					{
						while($row = $res -> fetch_assoc())
						{
							if ($phone == $row["phone"])
							{
								echo '<script type="text/javascript">alert("This Mobile Number is already Registerd")</script>';
							}
							else
							{
								echo '<script type="text/javascript">alert("This Email is already Registerd")</script>';
							}
						}
	
					}
					else
					{
						echo '<script type="text/javascript">alert("Data Not Saved")</script>';
					}
                }
            }
	else
	{
		//failed
		echo "<script>alert('Password does not match');</script>";
	}
}
?>
</div>
</body>
</html>