               <h3>Регистрация</h3>
                
                <?php if(isset($_SESSION['auth']['user'])) :?>
                <div class="ok_form"> <?=$_SESSION['reg']['ok']?> </div>
                                
                <?php else:?>
                <form action="<?=PATH?>reg" method="post">
                <table width="480" border="0" cellspacing="2" cellpadding="0" class="regtable">
                    <tr>
                        <td>Введите ваше имя <span style="color:red;">*</span></td>
                        <td><input type="text" name="name_reg" value="<?php if (isset($_SESSION['reg']['name'])) echo $_SESSION['reg']['name']?>" size=40/></td>
                    </tr>
                    <tr>
                        <td>Введите ваш логин <span style="color:red;">*</span></td>
                        <td><input type="text"  name="login_reg" value="<?php if (isset($_SESSION['reg']['login'])) echo $_SESSION['reg']['login']?>" size=40/></td>
                    </tr>
                    <tr>
                        <td>Введите ваш email <span style="color:red;">*</span></td>
                        <td><input type="text"  name="email_reg" value="<?php if (isset($_SESSION['reg']['email'])) echo $_SESSION['reg']['email']?>" size=40/></td>
                    </tr>
                    <tr>
                        <td>Введите ваш пароль <span style="color:red;">*</span></td>
                        <td><input type="password" name="password_reg" size=40 /></td>
                    </tr>
                    <tr>
                        <td>Повторите ваш пароль <span style="color:red;">*</span></td>
                        <td><input type="password" name="password_reg2" size=40 /></td>
                    </tr>
                    <tr>
                        <td>Введите символы с картинки <span style="color:red;">*</span></br>
                        <img src="<?=PATH?>libs/captcha/captcha.php" alt="" width="150" height="41" class="recaptcha" /></td>
                        <td><input type="text" name="checkcaptcha" size=40 /></td>
                    </tr>
                    <tr>
                        <td>Поля помеченные <span style="color:red;">*</span> обязательны для заполнения</td>
                        <td><input type="submit" value="Зарегистрироваться" name="reg"  /></td>
                    </tr>
                </table>
                </form>
                <?php endif; ?>
                
                
                
                
			<div class="errors_form">
            <?php if (isset($_SESSION['reg']['errors'])):?>
            <?=$_SESSION['reg']['errors'];
            unset ($_SESSION['reg']);?>
            <?php endif; ?>
            <?php if (isset($_SESSION['reg']['errors1']) || isset($_SESSION['reg']['errors2'])):?>
           <p> <?=$_SESSION['reg']['errors1']?> </p>
           <p> <?=$_SESSION['reg']['errors2']?> </p>
            <?php unset($_SESSION['reg']);?>
            <?php endif; ?>
			</div> 

        
        
        
        