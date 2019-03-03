<?php
defined("CATALOG") or die("Access denied");
/**
* Получение отдельного товара
**/

function get_one_product($product_id){
	global $connection;
	$product_id = mysqli_real_escape_string($connection, $product_id);
	$query = "SELECT * FROM products WHERE id = '$product_id' ";
	$res = mysqli_query ($connection, $query);
	$row = mysqli_fetch_assoc ($res);
	return $row;
}


?>