<?php defined("CATALOG") or die("Access denied"); ?>

<?php if ($_SESSION['auth']['ok_mail']):?>
<p style="color: green"><?=$_SESSION['auth']['ok_mail'] ;?></p>
<?php unset ($_SESSION['auth']); ?>

<?php else: ?>
<!-- Восстановление пароля  -->
<div>
<p> Введите адрес електронной почты Вашей учетной записи. </p>
<form action="<?=PATH?>forgot" method="POST" >
<p><input type="text" name="email" id="email" placeholder="Введите свой Emal" size=30></p>
<p><input type="submit" name="fpass"  value="Выслать пароль"></p>
</form>
</div>

<?php endif;?>

<?php if ($_SESSION['auth']['errors_mail']):?>
<div class="errors_form"><?=$_SESSION['auth']['errors_mail'] ;?></div>
<?php unset ($_SESSION['auth']); ?>
<?php endif;?>