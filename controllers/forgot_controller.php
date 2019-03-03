<?php
defined("CATALOG") or die("Access denied");

require "main_controller.php";
require "models/{$view}_model.php";

// Если запрошено восстановление пароля
if (isset($_POST['fpass'])){
    forgot();
    redirect();
}elseif (isset($_GET['forgot'])){
    access_change();    
    require "views/tpl3/{$view}.php";
}elseif (isset($_POST['change_pass'])){
    change_forgot_password();
    require "views/tpl3/{$view}.php";
}

require "views/tpl3/forgot_email.php";

?>