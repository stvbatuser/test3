<?php
defined("CATALOG") or die("Access denied");

// получение масива настроек сайта для редактирования

function get_options(){
  global $connection;
  $query = "SELECT * FROM options";
  $res = mysqli_query($connection, $query);
  if($res){
      return mysqli_fetch_all($res, MYSQLI_ASSOC);
  }else{
      return false;
  }
}

// изменение настроек 
function change_options(){
    global $connection;
    $course = trim(mysqli_real_escape_string($connection, $_POST['course']));
    $email = trim(mysqli_real_escape_string($connection, $_POST['email']));
    $pagination = trim(mysqli_real_escape_string($connection, $_POST['pagination'])); 
    $site_title = trim(mysqli_real_escape_string($connection, $_POST['site_title']));
	$id_option = $_POST['id_option'];
    
    $query = "UPDATE options SET value='$course' WHERE title = 'course'";
	$res = mysqli_query($connection, $query);
    if(mysqli_affected_rows($connection)){
        $_SESSION['admin']['ok'] = 'Изменения сохранены';
    }
	
	$query = "UPDATE options SET value='$email' WHERE title = 'email'";
	$res = mysqli_query($connection, $query);
    if(mysqli_affected_rows($connection)){
        $_SESSION['admin']['ok'] = 'Изменения сохранены';
    }
	
	$query = "UPDATE options SET value='$pagination' WHERE title = 'pagination'";
	$res = mysqli_query($connection, $query);
    if(mysqli_affected_rows($connection)){
        $_SESSION['admin']['ok'] = 'Изменения сохранены';
    }
	
	$query = "UPDATE options SET value='$id_option' WHERE title = 'id_option'";
	$res = mysqli_query($connection, $query);
    if(mysqli_affected_rows($connection)){
        $_SESSION['admin']['ok'] = 'Изменения сохранены';
    }
}
?>