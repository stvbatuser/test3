<?php
define("CATALOG", TRUE);

require_once '../config.php';
session_start();

$routes = [
	['url' => '#^admin/$|^\?#', 'view' => 'options'],
	['url' => '#^admin/login#i', 'view' => 'login'],
	['url' => '#^admin/options#i', 'view' => 'options'],
	['url' => '#^admin/category/(?P<id>\d+)#i', 'view' => 'category'],
	['url' => '#^admin/category#i', 'view' => 'category'],
	['url' => '#^admin/edit_product#i', 'view' => 'edit_product']
		
];                 

$url = ltrim($_SERVER['REQUEST_URI'], '/');

foreach ($routes as $route) {
	if( preg_match($route['url'], $url, $match) ){
		$view = $route['view'];
		break;
	}
}

if( empty($match) ){
    header("HTTP/1.1 404 Not Found");
	include '../views/404.php';
	exit;
}

if(!isset($_SESSION[auth][is_admin]) || $_SESSION[auth][is_admin] != 1){
    $view = login ;
}
extract($match);
// $id - ID категории
// $product_alias - alias продукта
// $view - вид для подключения

// проверка авторизирован ли администратор


include "controllers/{$view}_controller.php";