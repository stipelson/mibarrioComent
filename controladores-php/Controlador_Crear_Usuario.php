<?php
	include_once '../php/Controlador_Usuario.php';
	include_once '../php/Modelo_Usuario.php';

	$num_id = $_REQUEST['n_id'];
	$nombres= $_REQUEST['nom'];
	$apellidos= $_REQUEST['apell'];
	$usuario= $_REQUEST['usu'];
	$password= $_REQUEST['pass'];
	$pregunta= $_REQUEST['pregun'];
	$respuesta= $_REQUEST['respues'];
	$tipoid= $_REQUEST['tipo_id'];
	$ciudad= $_REQUEST['ciud'];
	$direccion= $_REQUEST['dire'];
	$edad= $_REQUEST['_edad'];
	$foto= $_REQUEST['fot'];
	$celular= $_REQUEST['celu'];
	$email= $_REQUEST['e_mail'];
	$genero= $_REQUEST['gene'];
	$perfil= $_REQUEST['perfi'];

	$c_usuario = new Controlador_Usuario();
	$c_usuario->crear_usuario($num_id, $usuario, $password, $nombres, $apellidos, 
						$direccion, $email, $tipoid, $ciudad, $pregunta, $respuesta, 
						$celular, $edad, $foto, $genero, $perfil);

	$m_usuario = new Modelo_Usuario($c_usuario);

	$num_error = 2;
	$num_error = $m_usuario->crear_Usuario();
	/*echo '<p>docum = '.$num_id;
	echo '<p>numerror = '.$num_error;
	echo '<p>perfil = '.$perfil;*/
	if($num_error == 1){
		header("Location: ../pages/Crear_Usuario.php?gestion=1");
	}else{
		header("Location: ../pages/Crear_Usuario.php?gestion=".$num_error);
	}
	
	

?>