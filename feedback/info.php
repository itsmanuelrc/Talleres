<?php
	include("conexion.php");
	if(isset($_POST['nombre']) && $_POST['nombre'] != ""){
		if(isset($_POST['correo']) && $_POST['correo'] != ""){
			if(isset($_POST['titulo']) && $_POST['titulo'] != ""){
				if(isset($_POST['mensaje']) && $_POST['mensaje'] != ""){
					$sql = "INSERT INTO `feedback` (`nombre`, `correo`, `titulo`, `mensaje`) VALUES ('".$_POST['nombre']."', '".$_POST['correo']."', '".$_POST['titulo']."', '".$_POST['mensaje']."');";
					$query = mysql_query($sql);
					if($query)
					{
						echo "bien";
					}
					else
					{
						echo "mal";
					}
				}
				else
				{
					echo "No puedes acceder directamente";
				}
			}
			else
			{
				echo "No puedes acceder directamente";
			}
		}
		else
		{
			echo "No puedes acceder directamente";
		}
	}else{
		echo "No puedes acceder directamente";
	}
?>