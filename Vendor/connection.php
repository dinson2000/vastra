<?php
session_start();
$conn= mysqli_connect("localhost","root","","myecom");
if ($conn -> connect_error)
		{                                    
			die("Connection Failed:".$conn -> connect_error);	
		}
		define("SERVER_PATH",$_SERVER['DOCUMENT_ROOT']."/myecom/");
		define("SITE_PATH","http://127.0.0.1/myecom/Vendor/");

		define("PRODUCT_IMAGE_SERVER_PATH",SERVER_PATH."Vendor/images/");
		define("PRODUCT_IMAGE_SITE_PATH",SITE_PATH."images/");

?>