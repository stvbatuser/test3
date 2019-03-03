<?php

//include 'main_controller.php';
//include "models/{$view}_model.php";

require ('main_controller.php');
require ('models/category_model.php');

/*if ($_GET['category']) {
	$id=$_GET['category'];
}
*/

$ids = cats_id($categories, $id);
if($ids){
	$ids = rtrim($ids, ",");
}
else {$ids = $id ;}


/*=========Пагинация==========*/

// кол-во товаров на страницу
$perpage = PERPAGE;

// общее кол-во товаров
$count_goods = count_goods($ids);

// необходимое кол-во страниц
$count_pages = ceil($count_goods / $perpage);
// минимум 1 страница
if( !$count_pages ) $count_pages = 1;

// получение текущей страницы
if( isset($_GET['page']) ){
	$page = (int)$_GET['page'];
	if( $page < 1 ) $page = 1;
}else{
	$page = 1;
}

// если запрошенная страница больше максимума
if( $page > $count_pages ) $page = $count_pages;

// начальная позиция для запроса
$start_pos = ($page - 1) * $perpage;

$pagination = pagination($page, $count_pages);

/*=========Пагинация==========*/

$products = get_products ($ids, $start_pos, $perpage);

require "views/tpl3/{$view}.php";
?>
