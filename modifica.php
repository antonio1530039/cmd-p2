<?php
	$servername = "localhost";
	$username = "sistem63_SQL01";
	$dbname   = "sistem63_Estudiantes";
	$password = "Chingatumadre123";		
	

	$id        = $_POST['id'];
	$nombre    = $_POST['nombre'];
	$apellidop = $_POST['apellidop'];
	$apellidom = $_POST['apellidom'];
	
	
	
//	$dato = $_POST['data'];
//	$info = $_POST['info'];

	
	echo "Nuevos datos de Registro Recibidos"."\n"."ID : ".$id."\n"."Nombre: ".$nombre."\n ApellidoP: ".$apellidop."\n ApellidoM: ".$apellidom."\n";	
	//echo "Hello, World!"."\n";	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 	
	

	//$sql = "INSERT INTO TablaAlumnos (Nombre, ApellidoP, ApellidoM)
	//VALUES ('$nombre', '$apellidop', '$apellidom')";
	$sql = "UPDATE TablaAlumnos SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom' WHERE id='$id'";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Actualizado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
