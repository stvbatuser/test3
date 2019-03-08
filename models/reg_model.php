<?php
defined("CATALOG") or die("Access denied");
/**
* регистрация
**/

function registration(){
	global $connection;
    $errors = '';
    $login = trim ($_POST['login_reg']);
    $password = trim ($_POST['password_reg']);
    $password2 = trim ($_POST['password_reg2']);
    $email = trim ($_POST['email_reg']);
    $name = trim ($_POST['name_reg']);
    $checkcaptha = trim ($_POST['checkcaptcha']);
    
    if (empty($name)) $errors .= '<li>Не указано имя</li>';
    if (empty($email)) $errors .= '<li>Не указан email</li>';
    if (empty($login)) $errors .= '<li>Не указан логин</li>';
    if (empty($password)) $errors .= '<li>Не указан пароль</li>';
    if (empty($password2)) $errors .= '<li>Не указан повторный пароль</li>';
    if ($password != $password2) $errors .= '<li>Пароли не совпадают</li>';
    if (empty($checkcaptha)) $errors .= '<li>Не введены символы с картинки</li>';
    if ($_SESSION['captcha'] != $checkcaptha) $errors .= '<li>Символы не совпадают</li>';
    
    
    if(!empty($errors)){
        //не заполнены обязательные поля
        $_SESSION['reg']['errors'] = "Ошибка регистрации: <ul>{$errors}</ul>";
		
        $_SESSION['reg']['login'] = $login;
		$_SESSION['reg']['password'] = $password;
		$_SESSION['reg']['email'] = $email;
		$_SESSION['reg']['name'] = $name;
        return;
    }
	
	$login = mysqli_real_escape_string($connection, $login);
	$password = md5($password);
	$email = mysqli_real_escape_string($connection, $email);
	$name = mysqli_real_escape_string($connection, $name);
	
	//проерка на дублирование данных
	$query1 = "SELECT login FROM users WHERE login = '$login' LIMIT 1 ";
	$res1 = mysqli_query($connection, $query1);
	if (mysqli_num_rows($res1) == 1){
		$_SESSION['reg']['errors1'] = "Пользователь с таким логином уже зарегистрирован";
        
        $_SESSION['reg']['login'] = $login;
		$_SESSION['reg']['password'] = $password;
		$_SESSION['reg']['email'] = $email;
		$_SESSION['reg']['name'] = $name;
        return;
	}
    
	$query2 = "SELECT email FROM users WHERE email = '$email' LIMIT 1 ";
	$res2 = mysqli_query($connection, $query2);
	if (mysqli_num_rows($res2) == 1 ){
		$_SESSION['reg']['errors2'] = "Пользователь с таким email уже зарегистрирован";
        
        $_SESSION['reg']['login'] = $login;
		$_SESSION['reg']['password'] = $password;
		$_SESSION['reg']['email'] = $email;
		$_SESSION['reg']['name'] = $name;
        return;
	}
    
    // добавление пользователя в базу
    $query3 = "INSERT INTO users (login, password, email, name) VALUES ('$login', '$password', '$email', '$name')";
    $res3 = mysqli_query($connection, $query3);
    if (mysqli_affected_rows($connection)>0){
        $_SESSION['reg']['ok'] = "Вы успешно зарегистрированы";
        $_SESSION['auth']['user'] = $name; 
        $_SESSION['auth']['is_admin'] = 0;
        
    }else{
        $_SESSION['reg']['login'] = $login;
		$_SESSION['reg']['password'] = $password;
		$_SESSION['reg']['email'] = $email;
		$_SESSION['reg']['name'] = $name;
        
        $_SESSION['reg']['errors'] = "Ошибка регистрации";
    }
	
    
}


?>