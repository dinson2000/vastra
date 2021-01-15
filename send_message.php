
<?php
require "connection.php";
require "function.php";

    $name=get_post($conn,$_POST['name']);
    $number=get_post($conn,$_POST['number']);
    $email=get_post($conn,$_POST['email']);
    $message=get_post($conn,$_POST['message']);
    $added_on=date("Y-m-d h:i:s");
    $sql1="INSERT INTO contact_us (name,number,email,message,added_on)VALUES('$name','$number','$email','$message','$added_on')";
    mysqli_query($conn,$sql1);
     echo "Submitted Succesfully";
?>