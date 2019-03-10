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
        	<h3>Настойки сайта</h3>	
                
        <form action="<?=PATH_ADMIN?>options" method="post">
        <table>
            <thead>
                <tr>
                    <th>Настройка</th>
                    <th>Значения</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($get_options as $option) :?>
                <tr>
                    <td><?=$option['name']?></td>
                    <td><input type="text" name="<?=$option['title']?>" value="<?=$option['value']?>" /></td>
                </tr>
            <?php endforeach;?>    
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="go_settings" value="Изменить" /></td>
                </tr>
            </tbody>
        </table>
        </form>
        
                <?php if ($_SESSION['admin']['ok']):?>
                <div class="ok_form"><p><?=$_SESSION['admin']['ok'] ;?></p></div> 
                <?php unset ($_SESSION['admin']['ok']); ?>
                      
                                
                <?php elseif ($_SESSION['admin']['errors']):?>
                <div class="errors_form"><p><?=$_SESSION['admin']['errors'] ;?></p></div> 
                <?php unset ($_SESSION['admin']['errors']); ?>
                
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