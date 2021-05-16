<?php 
require "connection.php";
require "function.php";
require "add_to_cart.php";

$pid = get_post($conn,$_POST['pid']);
$qty = get_post($conn,$_POST['qty']);
$size = get_post($conn,$_POST['size']);
$type = get_post($conn,$_POST['type']);

$obj=new add_to_cart();
if($type=="add"){
    $obj->addProduct($pid,$qty,$size);
}
if($type=="remove"){
    $obj->removeProduct($pid,$qty);
}
if($type=="update"){
    $obj->updateProduct($pid,$qty);
}
echo $obj->totalProduct();
?>