<?php
defined("CATALOG") or die("Access denied");
require_once "controllers/main_controller.php";
require_once "models/{$view}_model.php";


if(isset($_POST['go_settings'])){
change_options();

}

$get_options = get_options();

include_once "views/{$view}.php";

?>