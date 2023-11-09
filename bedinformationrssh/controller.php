<?php
/**
 * Copyright © 2020 RS Sumber Hurip. All rights reserved. 
 * Name 			:  	Informasi TT
 * Description 		:	Aplikasi Display Tempat Tidur
**/

require_once (__DIR__ . '/model.php');

$method = $_POST['method'];

if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
{	
	if($method == 'check_bed'){
		session_start(); 
		$model        = new Model();
	}

	
} else {
	exit('No direct access allowed.');
}

?>