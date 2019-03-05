<?php defined("CATALOG") or die("Access denied"); ?>
<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Каталог комп’ютерной техники</title>

<link href="<?=PATH?>views/tpl3/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="<?=PATH?>views/tpl3/css/style.css" type="text/css"  />

<link rel="stylesheet" type="text/css" href="<?=PATH?>views/tpl3/ddsmoothmenu.css" />

<script type="text/javascript" src="<?=PATH?>views/tpl3/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=PATH?>views/tpl3/js/ddsmoothmenu.js"></script>


</head>

<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="#">Каталог техники</a></h1></div>
        <div id="header_right">
        	<p>
	        <a href="#">My Account</a> | <a href="#">My Wishlist</a> | <a href="#">My Cart</a> | <a href="#">Checkout</a> | <a href="#">Log In</a></p>
            <p>
            	Shopping Cart: <strong>3 items</strong> ( <a href="shoppingcart.html">Show Cart</a> )
			</p>
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
    <div id="top_nav" class="ddsmoothmenu">
    
            <?php include "views\menu_template.php"?> 
            
            <br style="clear: left" />
    </div> <!-- end of ddsmoothmenu -->
    	
        
        <div id="templatemo_search">
            <form action="#" method="get">
              <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div> <!-- END of templatemo_menubar -->
    
    <div id="templatemo_main">
    	<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	
                <div class="content"> 
                <?php include "views/tpl3/form_login.php";?> 
                </div>
                
                <div class="content"> 
                	<ul class="sidebar_list">
                    	<?=$categories_menu?>
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
            	
            </div>
        </div>
        <div id="content" class="float_r">
        		
                <h3>Регистрация</h3>
                <form action="<?=PATH?>reg" method="POST" >
                <p><input type="text" name="name_reg" placeholder="Имя" size=40></p>
                <p><input type="password" name="email_reg"  placeholder="Email" size=40></p>
                <p><input type="text" name="login_reg"  placeholder="Логин" size=40></p>
                <p><input type="password" name="password_reg"  placeholder="Пароль" size=40></p>
                <p><input type="submit" name="reg"  value="Зарегистрироваться"></p>
                </form>
			
            <?php if (isset($_SESSION['reg']['errors'])):?>
            <?=$_SESSION['reg']['errors'];
            unset ($_SESSION['reg']);?>
            <?php endif; ?>
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    <div id="templatemo_footer">
    	<p><a href="#">Home</a> | <a href="#">Products</a> | <a href="#">About</a> | <a href="#">FAQs</a> | <a href="#">Checkout</a> | <a href="#">Contact Us</a>
		</p>

    	Copyright © 2072 <a href="#">Your Company Name</a> <!-- Credit: www.templatemo.com --></div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->
<script src="<?=PATH?>views/tpl3/js/jquery-1.9.0.min.js"></script>
	<script src="<?=PATH?>views/tpl3/js/jquery.accordion.js"></script>
	<script src="<?=PATH?>views/tpl3/js/jquery.cookie.js"></script>
	<script src="<?=PATH?>views/tpl3/js/jquery-ui.js"></script>
	<!-- меню акордеон 
	<script>
		$(document).ready(function(){
			$(".sidebar_list").dcAccordion();
			$("#perpage").change(function(){
				var perPage = this.value; // $(this).val()
				$.cookie('per_page', perPage, {expires:7, path:'/'});
				window.location = location.href;
			});
		});
	</script>
	

</body>
</html>