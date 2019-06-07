<?php
	require_once "controladores/plantilla.controlador.php";
	require_once "controladores/actividades.controlador.php";
	require_once "controladores/componente.controlador.php";
	require_once "controladores/coorfacu.controlador.php";
	require_once "controladores/coorcarrera.controlador.php";
	require_once "controladores/docente.controlador.php";
	require_once "controladores/empresa.controlador.php";
	require_once "controladores/estudiante.controlador.php";
	require_once "controladores/proyecto.controlador.php";
	require_once "controladores/repempresa.controlador.php";


	require_once "modelos/actividades.modelo.php";
	require_once "modelos/componente.modelo.php";
	require_once "modelos/coorfacu.modelo.php";
	require_once "modelos/coorcarrera.modelo.php";
	require_once "modelos/docente.modelo.php";
	require_once "modelos/empresa.modelo.php";
	require_once "modelos/estudiante.modelo.php";
	require_once "modelos/proyecto.modelo.php";
	require_once "modelos/repempresa.modelo.php";

	$plantilla = new ControladorPlantilla();
	$plantilla -> ctrPlantilla();

	