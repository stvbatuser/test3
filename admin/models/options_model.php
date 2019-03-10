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
    
    $query = "UPDATE options SET value='$course' , email='$email', pagination='$pagination', site_title='$site_title'";
    exit($query);          
    $res = mysqli_query($connection, $query);
    if(mysqli_affected_rows($connection)){
        $_SESSION['admin']['ok'] = 'Изменения сохранены';
    }else{
        $_SESSION['admin']['errors'] = 'Ошибка сохранения изменений';
    }
}
?>