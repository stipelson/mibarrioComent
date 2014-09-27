<html>
<head>
<title>Mi Barrio</title>
<!--inclusion de las css-->
<link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
</head>
<body>

<div class="login-card">

	<?php
		// inclusion del archivo con la clase
		include 'Modelo_Logueo.php';
		
		//instanciacion de la clase
		$validar = new Modelo_Logueo();

		//recuperacion de los datos introducidos
		$documento = $_REQUEST['documento'];
		$pregunta = $_REQUEST['pregu'];
		$respuesta = $_REQUEST['respues'];
		// validacion de los datos por medio de un metodo restaurar_Contra.
		$contra = $validar->restaurar_Contra($documento,$pregunta,$respuesta);
		//condicionales para envio de errores en la recuperacion de la contraseña, si no hay errores
		//devuelve la contraseña.
		if ($contra=="") 
			header("Location: Contra_Validar.php?error=1");
		elseif($contra=="NOt"){
			echo '<h1>La respuesta es incorrecta</h1>';
		}
		else{
			echo "<div class='login-help'>
			<h1>Su contrase&ntilde;a es:</h1><br>
			<p>$contra</div><br>";
		}


	?>
	<!--link para regresar a el login-->
	<div class="login-help">
	<p><a href="../index.php"><b>Regresar</b></a>
	</div>


</div>

</body>
</html>