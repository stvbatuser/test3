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
        return;
    }
    
}


?>