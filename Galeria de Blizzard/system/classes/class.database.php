<?php
/***********************************************************
 *	
 *		Galería de Blizzard
 * 		----------------------------------------------------
 *		Autor		:	Asfo Zavala
 *		Copyright	: 	Copyright (C) 2012, Asfo Zavala
 *		Licencia	:	GNU GPL v3
 *		Link		: 	http://github.com/Asfo/
 *		----------------------------------------------------
 *
 **********************************************************/
 //Acceso denegado a la visualización del archivo directamente.
 if(!DEFINED('ACCESS'))
	die("<h1>Error 403</h1><p>No tienes los permisos suficientes para acceder a este archivo.</p><hr /><i>Galer&iacute;a de Blizzard por <b>Asfo</b> &copy; 2011 | Sistema de Seguridad | <b>Error 403</b>");
 
class Database extends Load
{
	
	public $Conexion;
	
	public $Database;
	
	public function __construct()
	{
	
	}
	
	public function Connect()
	{																		//Poner error específico relacionado a la base de datos
		$this -> Conexion = @mysql_connect(DB_HOST, DB_USER, DB_PASS) or die ("Error de conexi&oacute;n");
	}
	
	public function SelectDB($DB)
	{															//Poner error específico relacionado a la base de datos
		$this -> Database = @mysql_select_db(DB_NAME) or die ("Error en la selecci&oacute;n de la base de datos");
	}
	
	public function Query($Query = NULL)
	{
	
	}
	
}
?>