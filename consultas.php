<?php
  include "conexion.php";
  $target = $_POST["target"];

	$sql = "SELECT * FROM $target WHERE aceptado=0";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
      if($target=="padre"){
        echo $row["id"].",". $row["nombre"].",". $row["telefono"].",". $row["correo"]. ",".$row["password"]."\n";  
      }
		}
	} else {
		echo "0";
	}	
	
	$conn->close();
 
?>
