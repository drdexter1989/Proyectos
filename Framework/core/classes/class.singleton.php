<?php
/***********************************************************
 *	
 *		Asfo Framework			
 * 		----------------------------------------------------
 *		Autor		:	Asfo Zavala
 *		Copyright	: 	Copyright (C) 2011, Asfo Zavala
 *		Licencia	:	GNU GPL v3
 *		Link		: 	http://github.com/Asfo/
 *		----------------------------------------------------
 *
 **********************************************************/
	include('../helpers/helper.errors.php');
	
	if(!DEFINED('_ACCESS'))
		die(Error('Error', 'No puedes acceder a este archivo directamente'));
 class AsfoSingleton
 {
	private static $Instances = array();
	
	public function __construct() { }
	
	public static function Instance($Class)
	{
		if(is_null($Class))
			die(Error('Error', 'El m&eacute;todo <b>Instance($e)</b> est&aacute; recibiendo un valor nulo'));
		
		if(!array_key_exists($Class, self::$Instances))
			self::$Instances[$Class] = new $Class;
		
		return self::$Instances[$Class];
	}
	
	public function __clone() { }
 
 }
 ?>