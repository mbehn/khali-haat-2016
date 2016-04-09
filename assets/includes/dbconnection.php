<?php 
	define("DB_SERVER", "localhost");
	define("DB_USER", "mbehn");
	define("DB_PASS", "password");
	define("DB_NAME", "khalihaat");

	$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	if(mysqli_connect_errno()){
		die("Databse connection failed: " .
			mysqli_connect_errno() .
			" (" . mysqli_connect_errno() . ")"
			);
		}
?>