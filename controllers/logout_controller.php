<?php
defined("CATALOG") or die("Access denied");

require "models/main_model.php";

	unset($_SESSION['auth']);
	redirect();
	

?>