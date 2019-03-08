<?php
defined("CATALOG") or die("Access denied");

require "main_controller.php";
require "models/{$view}_model.php";

if (isset($_GET['keyword']) && !empty($_GET['keyword'])){
    
    /*=========Пагинация==========*/

// кол-во товаров на страницу
$perpage = PERPAGE;

// общее кол-во товаров
$count_goods = count_search();

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

$result_search = search($start_pos, $perpage);
}else{
    $result_search = 'Введите поисковый запрос';
}

require "views/tpl3/{$view}.php";

?>