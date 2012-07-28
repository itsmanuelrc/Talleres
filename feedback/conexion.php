<?php
	$host = "localhost"; //IP
	$user = "root"; //Usuario
	$pass = ""; //Contraseña
	$bd = "taller"; //Base de datos
	$conexion = mysql_connect($host, $user, $pass) or die("Error: ".mysql_error());
	$baseDeDatos = mysql_select_db($bd, $conexion) or die("Error: ".mysql_error());
?>