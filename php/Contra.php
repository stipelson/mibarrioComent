<html>
<head>
<title>Recuperar Contrase&ntilde;a</title>
<!--inclusion o llamado del archivo con los estilos css-->
<link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
</head>
<body>


<!--inicio de la div que contendra el form con los datos solicitados-->
<div class="login-card">
	<h1>Recuperar contrase&ntilde;a</h1><br>
	<!--Inicio del form, el contenido sera enviado a Contra_validar.php-->
	<form action="Contra_Validar.php" method="post">
		Documento:
		<!--Se pide el documento para seguir con el siguiente paso-->
		<input type="text" name="documento" placeholder="Numero de documento" required="required">
		<?php
			{
				//si se recibe una respuesta error, imprime el tipo de error
				if (isset($_REQUEST['error']))
					echo "<br>Datos inv&aacute;lidos";
			}
		?>
		<p>
		<!--Boton para enviar el form-->
		<input type="submit" name="login" class="login login-submit" value="Solicitar">
		<!--Link para regresar a la pagina de index o inicio-->
		&nbsp;&nbsp;<a href = "../index.php">Regresar </a>
	</form>
</div>
			
			

</body>
</html>