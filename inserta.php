<?php
	
  include "conexion.php";

	$nombre    = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
  $sexo = $_POST['sexo'];
  $id_padre = 1;
  $id_grupo = 2;
  $aceptado = 0;

	$correo = $_POST['correo'];


	$sql = "INSERT INTO alumno (nombre, apellidos, sexo, id_padre, id_grupo, aceptado, correo)
	VALUES ('$nombre', '$apellidos', '$sexo', $id_padre, $id_grupo, $aceptado, '$correo')";

	if ($conn->query($sql)) {
		echo "Registro Insertado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
