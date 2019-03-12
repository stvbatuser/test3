<?php
defined("CATALOG") or die("Access denied");

require_once "../models/main_model.php";


$options = get_options_use();

$categories = get_cat();
$categories_tree = map_tree($categories);
$categories_menu = categories_to_string($categories_tree);

// получение страниц меню
$pages = get_pages();

?>