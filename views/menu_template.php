<?php defined("CATALOG") or die("Access denied"); ?>
<ul class="menu_top">
    <?php foreach ($pages as $item):?>
        <li><a href="<?=PATH?>page/<?=$item['page_id']?>"><?=$item['title']?></a></li>
    <? endforeach;?>
    
</ul>