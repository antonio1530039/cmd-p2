<?php
  include "conexion.php";
  $objeto = $_POST["objeto"];
  $password = $_POST["password"];
  $correo = $_POST["correo"];
  $NameUserLabel = $_POST["label"];
  if($NameUserLabel == "usuario"){
    $sql = "SELECT * FROM superadmin WHERE usuario = '$correo' and password = '$password'";  
  }else{
    $sql = "SELECT * FROM $objeto WHERE aceptado=1 and correo = '$correo' and password = '$password'";  
  }
	
	$result = $conn->query($sql);
  if ($result->num_rows > 0) {
		echo "success";
	} else {
		echo "error";
	}	


?>