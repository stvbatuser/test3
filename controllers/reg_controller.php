<?php
defined("CATALOG") or die("Access denied");

require "main_controller.php";
require "models/{$view}_model.php";




require "views/tpl3/{$view}.php";

?>