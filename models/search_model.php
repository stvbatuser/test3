<?php
defined("CATALOG") or die("Access denied");

/**
* Количество найденых товаров
**/
function count_search(){
    global $connection;
    $search = trim (mysqli_real_escape_string($connection, $_GET['keyword']));
    $query = "SELECT COUNT(*) FROM products WHERE title LIKE '%{$search}%' ";
    $res = mysqli_query($connection, $query);
    $count_search = mysqli_fetch_row($res);
    return $count_search[0];
}

/**
* Поиск
**/

function search($start_pos, $perpage){
	global $connection;
    $search = trim (mysqli_real_escape_string($connection, $_GET['keyword']));
    $query = "SELECT id, title, image FROM products WHERE title LIKE '%{$search}%' LIMIT $start_pos, $perpage ";
    
    $res = mysqli_query($connection, $query);
    if(!mysqli_num_rows($res)){
      return "По вашему запросу ничего не найдено" ; 
    }
    $result_search = array();
    while($row = mysqli_fetch_assoc($res)){
    $result_search[] = $row;
    }
    return $result_search;
    
    
}


?>