<?php
include "connection.php";
include "function.php";

// prx($_GET);
$cartTotal = 0;
foreach ($_SESSION['cart'] as $key => $val) {
    $productArr = get_product($conn, '', '', $key);
    
    $offeredprice = $productArr[0]['offeredprice'];
    
    $qty = $val['qty'];
    $cartTotal = $cartTotal + ($offeredprice * $qty);
}

$address = get_post($conn,$_POST['address']);
$city = get_post($conn,$_POST['city']);
$state = get_post($conn,$_POST['state']);
$zip = get_post($conn,$_POST['zip']);
$payment_type = get_post($conn,$_POST['payment']);

$payment_status='pending';
if($payment_type=='cod'){
    $payment_status='success';

}
$order_status='1';
$added_on=date('Y-m-d h:i:s');

$user_id = $_SESSION['USER_ID'];
$total_price = $cartTotal;

$sql = "INSERT INTO `order`(user_id,address,city,pincode,payment_type,total_price,payment_status,order_status,added_on)VALUES('$user_id','$address','$city','$zip','$payment_type','$total_price','$payment_status','$order_status','$added_on')";
mysqli_query($conn, $sql);

$order_id=mysqli_insert_id($conn);
foreach ($_SESSION['cart'] as $key => $val) {
    $productArr = get_product($conn, '', '', $key);
    
    $offeredprice = $productArr[0]['offeredprice'];
    
    $qty = $val['qty'];
    $cartTotal = $cartTotal + ($offeredprice * $qty);
    $sql1 = "INSERT INTO `order_detail`(order_id,product_id,qty,price)VALUES('$order_id','$key','$qty','$offeredprice')";
    mysqli_query($conn, $sql1);
}
unset($_SESSION['cart']);
    ?>
    <script>
    window.location.href = "thank_you.php";
  </script>
  <?php

?>