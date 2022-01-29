<?php
	$dsn = "mysql:host=localhost;dbname=shop";
	$user = "root";
	$pass = "789456123258";
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET lc_time_names='de_DE'",
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	);


	try 
	{
	  $conn = new PDO($dsn, $user, $pass, $option);
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 
	catch(PDOException $e) 
	{
	  echo "Connection failed: " . $e->getMessage();
	}
