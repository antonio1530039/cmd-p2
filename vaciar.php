<?php
	$servername = "localhost";
	$username = "sistem63_SQL01";
	$dbname   = "sistem63_Estudiantes";
	$password = "Chingatumadre123";	


	$id        = $_POST['id'];
	$nombre    = $_POST['nombre'];
	$apellidop = $_POST['apellidop'];
	$apellidom = $_POST['apellidom'];
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 	

	//$sql = "DELETE FROM TablaAlumnos"; // Truncar o BORRAR => ESA ES LA CUESTION?
	$sql = "TRUNCATE TablaAlumnos";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Eliminado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
