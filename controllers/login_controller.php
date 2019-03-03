<?php
defined("CATALOG") or die("Access denied");

require "models/main_model.php";
require "models/{$view}_model.php";


if (isset($_POST['log_in'])){
	authorization();
	redirect();
	
}else{
	header("Location: " . PATH);
}



?>