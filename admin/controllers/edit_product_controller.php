<?php

require "main_controller.php";
require "models/{$view}_model.php";

if(isset($_POST['edit_price'])){
	$update_price= update_price();
	redirect();
}else{
	exit('Ошибка изменения!');
}
 
?>
