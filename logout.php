<?php

use function PHPSTORM_META\map;

require "connection.php";
require "function.php";


unset($_SESSION['USER_LOGIN']);
unset($_SESSION['USER_ID']);
unset($_SESSION['USER_NAME']);
session_destroy();
header('location:index.php');
die();
?>