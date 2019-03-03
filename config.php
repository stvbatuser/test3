<?php 

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DB", "test3");
define("PATH", "http://test3/");
define("PERPAGE", 6);
$option_perpage = array(5, 10, 15);

$connection = @mysqli_connect(DBHOST, DBUSER, DBPASS, DB) or die("Нет соединения с БД");
mysqli_set_charset($connection, "utf8") or die("Не установлена кодировка соединения");