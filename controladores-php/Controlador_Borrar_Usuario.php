<?php
	include ("../pages/perfil.php"); 

	$doc = $_REQUEST['documento'];

		if($c_perfil->get_PermisoPerfiles()){

				if($m_usuario->eliminar_Usuario($doc)){
					header("Location: ../pages/Eliminar_Usuario.php?gestion=exito");
				}else{
					header("Location: ../pages/Eliminar_Usuario.php?gestion=error");
				}
	 		
	 	}else
			echo "<h1><i>Esto no te pertenece.</i></h1>";


?>