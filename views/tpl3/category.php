<?php defined("CATALOG") or die("Access denied"); ?>
<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
             
            <?php include "views\menu_template.php";?>

            <?php include "form_search.php";?>
            
            <br style="clear: left" />
    </div> <!-- end of ddsmoothmenu -->   
        
        
    </div> <!-- END of templatemo_menubar -->
    
    <div id="templatemo_main">
    	<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            
            <div class="content"> 
            <?php include VIEW . "form_login.php";?> 
            </div>
            
            	<h3>Каталог товаров</h3>   
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
        				
        	<h1>Товары</h1>
            
			<div class="pagination">
            <?php if ($count_pages > 1):?>            
			<p><?php echo $pagination;?></p>
            <?endif;?>
            </div>
            
			<?php foreach ($products as $product) :?>
			    <div class="product_box">
	            <h3><a href="<?=PATH?>product/<?=$product['id']?>" ><?php echo $product['title'];?></a></h3>
            	<a href="<?=PATH?>product/<?=$product['id']?>"><img src="<?php echo PATH . VIEW .'images/product/'.$product['image'];?>" alt="" /></a>
                
                <p class="product_price">Цена: <?php echo $product['price'];?> грн.</p>
                
                <a href="<?=PATH?>product/<?=$product['id']?>" >Подробнее...</a>
            </div>        	
			<?php endforeach; ?>	
            
            			
            <div class="cleaner"></div>
                 	
                <div class="pagination">
                <?php if ($count_pages > 1):?>            
                <p><?php echo $pagination;?></p>
                <?endif;?>
                 </div>
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    <div id="templatemo_footer">
    	<p><a href="#">Home</a> | <a href="#">Products</a> | <a href="#">About</a> | <a href="#">FAQs</a> | <a href="#">Checkout</a> | <a href="#">Contact Us</a>
		</p>

    	Copyright © 2072 <a href="#">Your Company Name</a> </div> 
        <!-- END of templatemo_footer -->
    
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