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
            	
               <?php require_once "sidebar.php"; ?>
				
            </div>
            
        </div>
        <div id="content" class="float_r">
        	<h3>Редактирование товаров</h3>	
			
			<div class="pagination">
            <?php if ($count_pages > 1):?>            
			<p><?php echo $pagination;?></p>
            <?endif;?>
            </div>
                
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
					<th>Цена</th>
					<th>Новая цена</th>
                    <th>Редактировать</th>
					<th>Удалить</th>
                   
                </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product) :?>
                <tr>
                    <td><?=$product['id']?></td>
					<td><?=$product['title']?></td>
						<form action="<?=PATH_ADMIN?>edit_product" method="post">
						<td><input type="text" name="price" value="<?php echo $product['price'];?>" size="10" /></td>
							<input type="hidden" name="id" value="<?php echo $product['id'];?>" /></td>
						<td><input type="submit" name="edit_price" value="Изменить" />
						</form>
					<td><a href="<?=PATH_ADMIN?>edit_product"><img src="<?=PATH_ADMIN?>views\img\edit.png" alt=""></a></td>
					<td><a href="<?=PATH_ADMIN?>delete_product"><img src="<?=PATH_ADMIN?>views\img\delete.png"></a></td>
			    </tr>
            <?php endforeach;?>    
                
             </tbody>
        </table>
        
        
                <?php if ($_SESSION['admin']['ok']):?>
                <div class="ok_form"><p><?=$_SESSION['admin']['ok'] ;?></p></div> 
                <?php unset ($_SESSION['admin']['ok']); ?>
                      
                                
                <?php elseif ($_SESSION['admin']['errors']):?>
                <div class="errors_form"><p><?=$_SESSION['admin']['errors'] ;?></p></div> 
                <?php unset ($_SESSION['admin']['errors']); ?>
                
                <?php endif;?>
        </div> 
		
		<div class="pagination">
            <?php if ($count_pages > 1):?>            
			<p><?php echo $pagination;?></p>
            <?endif;?>
            </div>
			
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    <div id="templatemo_footer">
    </div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->

</body>
</html>