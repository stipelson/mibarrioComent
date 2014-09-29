<?php
	// incluye los archivos con las clases y metodos necesarios
	include_once '../php/Controlador_Perfil.php';
	include_once '../php/Modelo_Perfil.php';

	// se obitnene los nuevos datos del perfil
	$nombre = $_REQUEST['newnomb'];
	$sistema= $_REQUEST['newsis'];
	$perfiles= $_REQUEST['newperf'];
	$productos= $_REQUEST['newprod'];
	$inventario= $_REQUEST['newinv'];
	$facturacion= $_REQUEST['newfac'];
	$reportes= $_REQUEST['newrep'];

	// se crea el objeto con los datos del form
	$new_c_perfil = new Controlador_Perfil();
	$new_c_perfil->crear_Perfil($nombre, $sistema, 
		$perfiles, $productos, $inventario, $facturacion, $reportes);
	$new_m_perfil=new Modelo_Perfil($new_c_perfil);
	// se modifica el perfil, y el resultado de la operacion de asigna a una variable
	$info = $new_m_perfil->modificar_Perfil($_REQUEST['perfil']);
	/*if( == "exito"){
		header("Location: ../pages/Crear_Perfil.php?gestion=exito");
	}else{*/

		// la variable es usada para arrojar un resultado en Crear_Perfil.php
		header("Location: ../pages/Crear_Perfil.php?gestion=".$info);
	//}
	

?>
