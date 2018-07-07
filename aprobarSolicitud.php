<?php
  include "conexion.php";
  $target = $_POST["target"];
  $id = $_POST["id"];
  $val = $_POST["valor"];

	$sql = "UPDATE $target SET aceptado=$val WHERE id = $id";
	if ($conn->query($sql)) {
		echo "success";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
 
?>
