<?php
	
  include "conexion.php";

/*
  params.add(new BasicNameValuePair("objeto","profesor"));
            params.add(new BasicNameValuePair("clave",mat));
            params.add(new BasicNameValuePair("nombre",nombre));
            params.add(new BasicNameValuePair("correo",correo));
            params.add(new BasicNameValuePair("password",password));

*/
   $objeto    = $_POST['objeto'];
  
  
  if($objeto == "padre"){
    $nombre    = $_POST['nombre'];
    $telefono    = $_POST['telefono'];
    $correo    = $_POST['correo'];
    $password    = $_POST['password'];
    $sql = "INSERT INTO $objeto (nombre, telefono, correo, password)
  	VALUES ('$nombre', '$telefono', '$correo', '$password')";  
  }else{

	  $clave    = $_POST['clave'];
    $nombre    = $_POST['nombre'];
    $correo    = $_POST['correo'];
    $password    = $_POST['password'];
    $sql = "INSERT INTO $objeto (clave, nombre, correo, password)
  	VALUES ('$clave', '$nombre', '$correo', '$password')";
  
  }
	
	if ($conn->query($sql)) {
		echo "success";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	//die ('Finalizando...');

 
?>
