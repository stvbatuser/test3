<?php defined("CATALOG") or die("Access denied"); ?>

<div class="content"> 
	<h5>Управление страницами</h5>
		<ul>
			<li><a href="#">Добавить страницу</a></li>
		</ul>
</div>
                
<div class="content"> 
    <h5>Управление товарами</h5>
		<ul>
			<li><a href="<?=PATH_ADMIN?>category">Список товаров</a></li>
		</ul>
					
</div>
				
<div class="content"> 
    <h5>Каталог товаров</h5>
		<ul class="sidebar_list">
            <?=$categories_menu?>
        </ul>							
</div>
