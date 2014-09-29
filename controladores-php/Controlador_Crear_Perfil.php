<?php
	// incluye las clases con metodos necesarios para la creacion del perfil
	include_once '../php/Controlador_Perfil.php';
	include_once '../php/Modelo_Perfil.php';

	// obitne el nombre(string) y permisos(boolean) del nuevo perfil ingresados en el form. 
	$nombre = $_REQUEST['nomb_Perfil'];
	$sistema= $_REQUEST['sis'];
	$perfiles= $_REQUEST['perf'];
	$productos= $_REQUEST['prod'];
	$inventario= $_REQUEST['inv'];
	$facturacion= $_REQUEST['fac'];
	$reportes= $_REQUEST['rep'];

	// crea el nuevo perfil y pasa los datos correspondientes al nuevo perfil
	$c_perfil = new Controlador_Perfil();
	$c_perfil->crear_Perfil($nombre, $sistema, 
		$perfiles, $productos, $inventario, $facturacion, $reportes);
	$m_perfil=new Modelo_Perfil($c_perfil);
	$info = $m_perfil->crear_Perfil($c_perfil);
	/*if( == "exito"){
		header("Location: ../pages/Crear_Perfil.php?gestion=exito");
	}else{*/
		// envia el header con el resultado de la creacion del perfil 
		header("Location: ../pages/Crear_Perfil.php?gestion=".$info);
	//}
	

?>