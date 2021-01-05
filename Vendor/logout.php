<?php
session_start();
unset($_SESSION['ADMIN_LOGIN']);
unset($_SESSION['ADMIN_SUERNAME']);
header('location:login.php');
die();
?>