<?php

session_start();

if (isset($_SESSION["user_id"])) {
	$_SESSION['user_id']= null;
	header("location:index.php");
}
?>