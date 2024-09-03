<?php

session_start();

if (isset($_SESSION["vendor_id"])) {
	session_destroy();
	header("location:login.php");
}else{
	header("location:index.php");
}


?>