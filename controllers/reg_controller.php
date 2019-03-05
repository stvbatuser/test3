<?php
defined("CATALOG") or die("Access denied");

require "main_controller.php";
require "models/{$view}_model.php";

if (isset($_POST['reg'])){
    registration();
    redirect();
}


require "views/tpl3/{$view}.php";

?>