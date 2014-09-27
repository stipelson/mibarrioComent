<html>
<head>
<title>Mi Barrio</title>
<!--incluion de los css-->
<link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
</head>
<body>

<div class="login-card">
	<h1>Recuperar contrase&ntilde;a</h1><br>
	<!--inicio del form-->
	<form action="Contra_Validar2.php" method="post">
		<?php
		//Esto se encarga de revisar si el usuario existe
		//si existe, llama a Contra_Validar2 para que muestre la contraseña

			include 'Controlador_Logueo.php';
			include 'Modelo_Logueo.php';
			
			$controlador = new Controlador_Logueo();
			$validar = new Modelo_Logueo($controlador);
			//recupera el documento ingresado en el form
			$documento = $_REQUEST['documento'];

			//el metodo devuelve la pregunta asociada a ese documento
			$pregunta = $validar->pregunta_Usuario($documento);
			// imprime el documento
			echo '<br>Documento: <input type="text" name="documento" value="'.$documento.'" readonly>';

			// si no hay pregunta, devuelve a Contra.php, junto con el error, 
			// en caso contrario imprime la pregunta y el input (html) para ingresar la respuesta 
			if ($pregunta=="")
				header("Location: Contra.php?error=1");
			else{
					echo "<br>La pregunta es: ";
					echo '<input type="text" name="pregu" value="'.$pregunta.'" readonly>';
					echo "<br>Respuesta:";
					echo '<input type="text" name="respues" placeholder="respuesta">';
			}
			//si se recibe error por parte de la validacion imprime el error 
			if (isset($_REQUEST['error']))
				echo "<h1>La respuesta es incorrecta</h1><br>";

		?>
	<br>
		<!--boton para el envio del form-->
		<input type="submit" name="aceptar" class="login login-submit" value="Aceptar">
		

	</form>


</div>
</body>
</html>