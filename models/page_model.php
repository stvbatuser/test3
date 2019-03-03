<?php
defined("CATALOG") or die("Access denied");
/**
* Получение страницы
**/

function get_one_page($page_id){
	global $connection;
    $page_id = mysqli_real_escape_string ($connection, $page_id);
	$query = "SELECT * FROM pages WHERE page_id='$page_id'";
    $res = mysqli_query ($connection, $query);
    return mysqli_fetch_assoc($res);
}


?>