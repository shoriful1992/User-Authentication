<?php
	require_once("connection.php");
	unset($_SESSION['auth_id']);
	unset($_SESSION['auth_email']);
	header("location:login.php?msg=Log Out Successfully");
?>