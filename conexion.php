<?php
  	$servername = "localhost";
	$username = "root";
	$dbname   = "p2CDM";
	$password = "molina";	
	


	
	//echo "Hello, World!"."\n";	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 	
	


?>