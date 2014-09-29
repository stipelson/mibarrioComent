<?php
	include_once '../php/Controlador_Usuario.php';
	include_once '../php/Modelo_Usuario.php';
	include_once '../php/Controlador_Perfil.php';
	include_once '../php/Modelo_Perfil.php';

	$num_id = $_REQUEST['n_id'];
	$nombres= $_REQUEST['nom'];
	$apellidos= $_REQUEST['apell'];
	$usuario= $_REQUEST['usu'];
	$password= "";
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
	echo 'perfil = '.$perfil.'<p>';

	$c_perfil = new Controlador_Perfil();
	$m_perfil = new Modelo_Perfil($c_perfil);
	$m_perfil->buscar_Perfil($perfil);
	$c_usuario = new Controlador_Usuario();
	$c_usuario->crear_usuario($num_id, $usuario, $password, $nombres, $apellidos, 
						$direccion, $email, $tipoid, $ciudad, $pregunta, $respuesta, 
						$celular, $edad, $foto, $genero, $c_perfil->get_ID());

	$m_usuario = new Modelo_Usuario($c_usuario);

	$num_error = 1;
	if($perfil)
		$num_error = $m_usuario->actualizar_Datos_Usuario2($_REQUEST['doc']);

	/*echo '<p>docum = '.$_REQUEST['doc'];
	echo '<p>numerror = '.$num_error;
	echo '<p>perfil = '.$perfil;
	*/if($num_error == 1){
		header("Location: ../pages/Modificar_Usuario.php?gestion=1");
	}else{
		header("Location: ../pages/Modificar_Usuario.php?gestion=".$num_error);
	}
	

?>