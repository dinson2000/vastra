<?php

use function PHPSTORM_META\map;

require "connection.php";
require "function.php";

$email = get_post($conn,$_POST['email']);
$password = get_post($conn,$_POST['password']);
$res=mysqli_query($conn,"SELECT * FROM user where email='$email' and password='$password'");
$check_user=mysqli_num_rows($res);
if($check_user>0){
$row=mysqli_fetch_assoc($res);
$_SESSION['USER_LOGIN']='yes';
$_SESSION['USER_ID']=$row['id'];
$_SESSION['USER_NAME']=$row['name'];
echo "valid";
}else{
echo "wrong";
}

?>