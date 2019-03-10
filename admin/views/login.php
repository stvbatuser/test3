<?php defined("CATALOG") or die("Access denied"); ?>
<!DOCTYPE >
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Каталог комп’ютерной техники</title>

<link href="<?=PATH. VIEW?>templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=PATH . VIEW ?>css/style.css" type="text/css"  />
<link rel="stylesheet" type="text/css" href="<?=PATH . VIEW?>ddsmoothmenu.css" />

</head>

<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="#">Каталог техники</a></h1></div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
    <div id="top_nav" class="ddsmoothmenu">
    
            <?php include 'menu.php'  ?>          
                                   
            <br style="clear: left" />
    </div> <!-- end of ddsmoothmenu -->
    </div> <!-- END of templatemo_menubar -->
    
    <div id="templatemo_main">
    	<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	
                <div class="content"> 
                11111111111111
                </div>
                
                <div class="content"> 
                222222222222222
                </div>
            </div>
            
        </div>
        <div id="content" class="float_r">
        	<h5>Авторизация для администраторов сайта</h5>	      	  			    
        <form action="<?=PATH_ADMIN?>login" method="POST" >
        <p><input type="text" name="login" id="login" placeholder="Имя"></p>
        <p><input type="password" name="password" id="password" placeholder="Пароль"></p>
        <p><input type="submit" name="log_in"  value="Войти"></p>
        </form>
    <?php if ($_SESSION['auth']['errors']):?>
    <div class="errors_form"><p><?=$_SESSION['auth']['errors'] ;?></p></div>
    <?php unset ($_SESSION['auth']); ?>
    <?php endif;?>	
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    <div id="templatemo_footer">
    </div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->

</body>
</html>