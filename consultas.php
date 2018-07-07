<?php
  include "conexion.php";
  $target = $_POST["target"];
  if($target == "grupo"){
    $sql = "SELECT * FROM $target";
  }else if($target == "getProfesor"){
    $sql = "SELECT * FROM profesor WHERE aceptado = 1";
  }
  else{
    $sql = "SELECT * FROM $target WHERE aceptado=0";  
  }
	
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
      if($target=="padre"){
        echo $row["id"].",". $row["nombre"].",". $row["telefono"].",". $row["correo"]. ",".$row["password"]."\n";  
      }else if($target == "profesor" || $target == "getProfesor"){
        echo $row["id"].",". $row["nombre"].",". $row["correo"].",". $row["password"]. ",".$row["clave"]."\n";
      }else if($target == "grupo"){
        echo $row["id"].",". $row["nombre"].",". $row["id_profesor"]."\n";
      }
		}
	} else {
		echo "0";
	}	
	
	$conn->close();
 
?>