<?php
	include_once '../php/Controlador_Usuario.php';
	include_once '../php/Modelo_Usuario.php';

	$num_id = $_REQUEST['id'];
	$password= $_REQUEST['pass'];

	$c_usuario = new Controlador_Usuario();
	$m_usuario = new Modelo_Usuario($c_usuario);
	$m_usuario->buscar_Usuario2($num_id);

	$num_error = 2;
	$num_error = $m_usuario->cambiar_Contra($num_id,$password);

	if($num_error == 1){
		header("Location: ../pages/Modificar_Usuario.php?gestion=1");
	}else{
		header("Location: ../pages/Modificar_Usuario.php?gestion=".$num_error);
	}
	

?>