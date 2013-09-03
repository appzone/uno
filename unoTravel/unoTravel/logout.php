<?php

	require_once('security_check.php');
	require_once('connection/config_file.php');
	require('connection/connection.php');
	require('function/query_storage.php');
	
	session_destroy();
	session_start();
	$_SESSION['x']='logoutsukses';
	header('location:index.php');
?>