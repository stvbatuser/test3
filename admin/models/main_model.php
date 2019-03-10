<?php
defined("CATALOG") or die("Access denied");
/**
* Распечатка массива
**/
	function print_arr($array){
	echo "<pre>" . print_r($array, true) . "</pre>";
}

function redirect(){
	$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] 
	: PATH;
	
	header("Location: $redirect");
	exit;
	
}


?>