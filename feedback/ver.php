<?php
	include("conexion.php");
	$sql = "SELECT * FROM `feedback`";
	$query = mysql_query($sql);
	while($row = mysql_fetch_array($query)) //true|Verdadero
	{
		echo "ID: ".$row['id'];
		echo "<br />Nombre:".$row['nombre'];
		echo "<br />Correo: ".$row['correo'];
		echo "<br />T&iacute;tulo:".$row['titulo'];
		echo "<br />Mensaje: ".$row['mensaje']."<br />";
	}
?>