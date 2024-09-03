<?php

session_start();
include '../admin/classes/Credentials.php';

if (isset($_SESSION["admin_id"])) {
    $a= new Credentials();
	$a->updateActive();
	session_destroy();
	header("location:login.php");
}else{
	header("location:index.php");
}


?>