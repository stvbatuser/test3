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
    $email = trim ($_POST['email_reg']);
    $name = trim ($_POST['name_reg']);
    
    if (empty($name)) $errors .= '<li>Не указано имя</li>';
    if (empty($email)) $errors .= '<li>Не указан email</li>';
    if (empty($login)) $errors .= '<li>Не указан логин</li>';
    if (empty($password)) $errors .= '<li>Не указан пароль</li>';
    
    
    
    if(!empty($errors)){
        //не заполнены обязательные поля
        $_SESSION['reg']['errors'] = "Не заполнены обязательные поля: <ul>{$errors}</ul>";
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
	$query = "SELECT login FROM users WHERE login = '$login' LIMIT 1 ";
	$res = mysqli_query($connection, $query);
	if (mysqli_num_rows($res) == 1){
		$_SESSION['reg']['errors'] = "Пользователь с таким логином уже зарегистрирован";
	}
	$query = "SELECT email FROM users WHERE email = '$email' LIMIT 1 ";
	$res = mysqli_query($connection, $query);
	if (mysqli_num_rows($res) == 1){
		$_SESSION['reg']['errors'] = "Пользователь с таким email уже зарегистрирован";
	}
	
    
}


?>