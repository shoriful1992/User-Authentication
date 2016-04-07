<?php
	@session_start();
	require_once("setting.php");

	$db = new DatabaseConnection();

	define("UPLOADED_PATH", 'picters/');
?>