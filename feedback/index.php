<!DOCTYPE html>
<html lang="es">
<head>
	<title>Feedback</title>
	<meta charset="UTF-8"/>
	<style type="text/css">
		*{ margin: 0; padding: 0; }
		body{
			font: 100% normal Arial, Helvetica, sans-serif;
			background: #161712;
		}
		div.caja {
			margin:0 auto;
			width:500px;
			background:#222222;
			position:relative;
			top:50px;
			border:1px solid #262626;
		}

		div.caja h1 { 
			color:#ffffff;
			font-size:18px;
			text-transform:uppercase;
			padding:5px 0 5px 5px;
			border-bottom:1px solid #161712;
			border-top:1px solid #161712; 
		}

		div.caja label {
			width:100%;
			display: block;
			background:#1C1C1C;
			border-top:1px solid #262626;
			border-bottom:1px solid #161712;
			padding:10px 0 10px 0;
		}

		div.caja label span {
			display: block;
			color:#bbbbbb;
			font-size:12px;
			float:left;
			width:100px;
			text-align:right;
			padding:5px 20px 0 0;
		}

		div.caja .input_texto {
			padding:10px 10px;
			width:200px;
			color: #FFF;
			background:#262626;
			border: 1px double #171717;
		}

		div.caja .mensaje{
			padding:7px 7px;
			width:350px;
			background:#262626;
			border: 1px double #171717;
			overflow:hidden;
			height:150px;
			color: #FFF;
		}

		div.caja .boton
		{
			margin:0 0 10px 0;
			padding:4px 7px;
			background:#CC0000;
			border:0px;
			color: #FFF;
			position: relative;
			top:10px;
			left:382px;
			width:100px;
			border: 1px double #660000;
			cursor: pointer;
		}
	</style>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#boton").click(function(){
			var nombre = $("#nombre").val();
			var correo = $("#correo").val();
			var titulo = $("#titulo").val();
			var mensaje = $("#feedback").val();
			
			var informacion = "nombre="+nombre+"&correo="+correo+"&titulo="+titulo+"&mensaje="+mensaje;
			
			var archivo = "info.php";
			var filtro = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			
			$.ajax({
				type: "POST",
				url: archivo,
				data: informacion,
				success: function(respuesta){
					if(respuesta == "No puedes acceder directamente"){
						alert("Debes rellenar todos los campos");
						return false;
					}
					if(respuesta == "Error")
					{
						alert("Hubo un error al enviar el feedback");
						return false;
					}
					if(!filtro.test(correo))
					{
						alert("Correo invalido");
						return false;
					}
					if(respuesta == "mal")
					{
						alert("Hubo un problema al enviar el feedback");
						return false;
					}
					if(respuesta == "bien")
					{
						alert("Feedback enviado, gracias");
						return false;
					}
				},
				error: function(){
					alert("Hubo un problema con el servidor");
				}
			});
			return false;
		});
	});
	</script>
</head>
<body>
	<form method="POST" action="">
		<div class="caja">
			<h1>FEEDBACK:</h1>
			<label>
				<span>Nombre:</span>
				<input type="text" class="input_texto" name="nombre" id="nombre"/>
			</label>
			<label>
				<span>Correo:</span>
				<input type="text" class="input_texto" name="correo" id="correo" />
			</label>
			<label>
				<span>T&iacute;tulo:</span>
				<input type="text" class="input_texto" name="titulo" id="titulo" />
			</label>
			<label>
				<span>Mensaje:</span>
				<textarea class="mensaje" name="feedback" id="feedback"></textarea><br />
				<input type="button" class="boton" value="Enviar" id="boton"/>
			</label>
		</div>
	</form>
</body>
</html>