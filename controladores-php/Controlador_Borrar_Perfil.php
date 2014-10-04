<?php
	// incluye los controladores y clases necesarias 
	include_once '../Controladores/Controlador_Perfil.php';
	include_once '../Modelos/Modelo_Perfil.php';
	include ("../pages/perfil.php"); 

	// recupera la id del perfil a borrar
	$nombre = $_REQUEST['id'];
		// obtiene los permisos del usuario que inicio sesion, para dejarlo continuar
		if($c_perfil->get_PermisoPerfiles()){
	 			$b_perfil=new Modelo_Perfil();
				echo"$nombre";
				// elimina el perfil con el metodo correspondiente, en caso de arrojar false, regresa a crear perfil 
				// con el error correspondiente
				if($b_perfil->eliminar_Perfil($nombre)){
					header("Location: ../pages/Crear_Perfil.php?gestion=exito2");
				}else{
					header("Location: ../pages/Crear_Perfil.php?gestion=error2");
				}
	 		
	 	}else
			echo "<h1><i>Esto no te pertenece.</i></h1>";


?>