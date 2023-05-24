<?php
	$host ="localhost";
	$username ="root";
	$password ="";
	$dbname ="users";
	global $show_users_data;
    try{
		$show_users_data=mysqli_connect($host, $username, $password, $dbname);
	}
	catch(Exception $e){
		die ("failed to connect ".$e->getMessage());
	}
?>