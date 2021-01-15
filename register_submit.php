<?php

use function PHPSTORM_META\map;

require "connection.php";
require "function.php";

$name = get_post($conn,$_POST['name']);
$email = get_post($conn,$_POST['email']);
$phone = get_post($conn,$_POST['number']);
$password = get_post($conn,$_POST['password']);

$check_user=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user where email='$email'"));
if($check_user>0){
echo "Exist";
}else{
    $added_on=date('Y-m-d h:i:s');
echo "insert";
mysqli_query($conn,"INSERT INTO user(name,phone,email,password,added_on)VALUES('$name','$phone','$email','$password','$added_on')");
}

?>