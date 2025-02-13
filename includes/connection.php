<?php

	$server="localhost";
	$user="root";
	$pass="";
	$db="medicineguide";
	
	// connect to mysql
	
	$con = mysqli_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql.");
	
	// select the db
	// try{
	// 	$con = mysqli_connect($server, $user, $pass,$db);
	// 	echo "connected";
	// }catch(mysqli_sql_exception){
	// 	echo "connection error";
	// }
	
	mysqli_select_db($con,$db) or die("Sorry, can't select the database.");

?>