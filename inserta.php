<?php
	$servername = "localhost";
	$username = "sistem63_SQL01";
	$dbname   = "sistem63_Estudiantes";
	$password = "Chingatumadre123";	

	$nombre    = $_POST['nombre'];
	$apellidop = $_POST['apellidop'];
	$apellidom = $_POST['apellidom'];

	
	echo "Registro Recibido"."\n"."Nombre: ".$nombre."\n ApellidoP: ".$apellidop."\n ApellidoM: ".$apellidom."\n";	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 	
	

	$sql = "INSERT INTO TablaAlumnos (Nombre, ApellidoP, ApellidoM)
	VALUES ('$nombre', '$apellidop', '$apellidom')";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Insertado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
