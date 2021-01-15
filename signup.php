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


// Signup 

if (isset($_POST['register_btn'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	if ($password == $password2 && $username != NULL && $email != NULL && $phone != NULL) {
		//create user
		$password = md5($password2);
		$sql = "INSERT INTO users (name,phone,email,password,gender) VALUES('$username','$phone','$email','$password','$gender')";
		$query_run = mysqli_query($conn, $sql);
		if ($query_run) {
			echo '<script type="text/javascript">alert("Welcome User!!!")</script>';
			header("location:login.php");
		} else {
			$res = mysqli_query($conn, "select phone from users");
			if ($res->num_rows > 0) {
				while ($row = $res->fetch_assoc()) {
					if ($phone == $row["phone"]) {
						echo '<script type="text/javascript">alert("This Mobile Number is already Registerd")</script>';
					} else {
						echo '<script type="text/javascript">alert("This Email is already Registerd")</script>';
					}
				}
			} else {
				echo '<script type="text/javascript">alert("Data Not Saved")</script>';
			}
		}
	} else {
		//failed
		echo "<script>alert('Password does not match');</script>";
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

<body>
	<h1 class="text-weight-bold text-center mt-2">Log In | Sign Up</h1><br>
	<h5 class="text-weight-bold text-center">Not Registered?</br><a href="signup.php">Sign Up</a></h1></h5>
		<div class="row">
			<div class="d-flex justify-content-center align-items-center container-fluid col-6">

				<form method="post" action="">
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
						<input type="email" class="form-control " name="email" placeholder="Enter email" required>

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
							<input type="submit" class="btn btn-block" style="background-color:#FF9933;color:black;" name="register_btn" value="Submit">

						</div>
					</div>
				</form>
			</div>
		</div>

</body>

</html>