<?php defined("CATALOG") or die("Access denied"); ?>
<div>

<div id="auth">
<?php if (!isset($_SESSION['auth']['user'])):?>
<form action="<?=PATH?>login" method="POST" >
<p><input type="text" name="login" id="login" placeholder="Имя"></p>
<p><input type="password" name="password" id="password" placeholder="Пароль"></p>
<p><input type="submit" name="log_in"  value="Войти"></p>
<p><a href="<?=PATH?>reg">Регистрация</a> | <a href="<?=PATH?>forgot" id="forgot_link">Забыли пароль?</a></p>
</form>

<?php if ($_SESSION['auth']['errors']):?>
<p style="color: red"><?=$_SESSION['auth']['errors'] ;?></p>
<?php unset ($_SESSION['auth']); ?>
<?php endif;?>

<?php if ($_SESSION['auth']['ok']):?>
<p style="color: green"><?=$_SESSION['auth']['ok'] ;?></p>
<?php unset ($_SESSION['auth']); ?>
<?php endif;?>

<?php else: ;?>
<p> Добро пожаловать <b><?=$_SESSION['auth']['user'] ;?></b></p>
<p> <a href="<?=PATH?>logout">Выход </a></p>
<?php endif;?>
</div>

</div>