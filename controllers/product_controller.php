<?php
defined("CATALOG") or die("Access denied");

require "main_controller.php";
require "models/{$view}_model.php";


$get_one_product = get_one_product($product_id);


require "views/tpl3/{$view}.php";

?>