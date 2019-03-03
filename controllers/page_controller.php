<?php
defined("CATALOG") or die("Access denied");

require "main_controller.php";
require "models/{$view}_model.php";

$page = get_one_page($page_id);


require "views/tpl3/{$view}.php";

?>