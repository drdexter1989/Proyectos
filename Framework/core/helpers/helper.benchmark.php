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
   include('helper.errors.php');
	
	if(!DEFINED('_ACCESS'))
		die(Error('Error', 'No puedes acceder a este archivo directamente'));
	
	/*
	* Analiza el momento en que arrancar� el sistema.
	*/
	function benchMarkStart(){
		global $totalTime;
		$totalTime = microtime(true);
	}
	/*
	* Basado en el momento en que arranc� el sistema, comprueba en que momento
	* finaliz� la carga del sistema.
	*/
	 function benchMarkEnd(){
		global $totalTime;
		$totalTime = microtime(true) - $totalTime;
	 }
 
	/*
	* Analiza la cantidad de memoria utilizada.
	* @Retorna: String
	*/
	function memoryUsage(){
		$Usage = "";
		$memUsage = memory_get_usage(true);
		if($memUsage < 1024)
			$Usage = $memUsage . " Bytes";
		elseif($memUsage < 1048576)
			$Usage = $memUsage . " Kilobytes";
		else
			$Usage = $memUsage . " Megabytes";
		return $Usage;
	}
 
 //EOF
 ?>