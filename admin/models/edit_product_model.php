<?php
defined("CATALOG") or die("Access denied");

//изменение цены
function update_price(){
	global $connection;
	$price = (float) str_replace(',', '.', $_POST['price']);
	$id = (int) $_POST['id'];
	
	$query="UPDATE products SET price = '$price' WHERE id = '$id'";
	$res = mysqli_query($connection, $query);
	if(mysqli_affected_rows($connection)>0){
		return true;
	}else{
		return false;
	}
}
?>