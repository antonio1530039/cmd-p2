<?php
	$servername = "localhost";
	$username = "sistem63_SQL01";
	$dbname   = "sistem63_Estudiantes";
	$password = "Chingatumadre123";			
	

	$nombre    = $_POST['nombre'];
	$apellidop = $_POST['apellidop'];
	$apellidom = $_POST['apellidom'];
	
	//echo "Hello, World!"."\n";	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 	
	
	$sql = "SELECT id, nombre, apellidop, apellidom FROM TablaAlumnos";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. " " . $row["apellidop"]. " " . $row["apellidom"]. "\n";
			echo $row["id"].",". $row["nombre"].",". $row["apellidop"].",". $row["apellidom"]. "\n";
		}
	} else {
		echo "0 results";
	}	
	
	$conn->close();
	//die ('Finalizando...');
	die ('');

 
?>
