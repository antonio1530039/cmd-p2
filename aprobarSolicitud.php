<?php
  include "conexion.php";
  $target = $_POST["target"];
  $id = $_POST["id"];

	$sql = "UPDATE $target SET aceptado=1 WHERE id = $id";
	if ($conn->query($sql)) {
		echo "success";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
 
?>
