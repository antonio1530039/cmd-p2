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
    $grupo   = $_POST['grupo'];
    $sql = "INSERT INTO $objeto (nombre, telefono, correo, password, id_grupo)
  	VALUES ('$nombre', '$telefono', '$correo', '$password',$grupo )";  
  }else if($objeto == "profesor"){

	  $clave    = $_POST['clave'];
    $nombre    = $_POST['nombre'];
    $correo    = $_POST['correo'];
    $password    = $_POST['password'];
    $sql = "INSERT INTO $objeto (clave, nombre, correo, password)
  	VALUES ('$clave', '$nombre', '$correo', '$password')";
  
  }else if($objeto == "grupo"){
    $nombre = $_POST["nombre"];
    $id_maestro = $_POST["id_maestro"];
    $sql = "INSERT INTO $objeto (nombre, id_profesor)
  	VALUES ('$nombre', $id_maestro)";
    
  }else if($objeto == "tarea"){
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $id_grupo = $_POST["id_grupo"];
    $fecha = date("d-m-Y h:i:sa");
    $sql = "INSERT INTO $objeto (titulo, descripcion, fecha, id_grupo)
  	VALUES ('$titulo', '$descripcion', '$fecha', $id_grupo)";
  }
	
	if ($conn->query($sql)) {
		echo "success";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	//die ('Finalizando...');

 
?>
