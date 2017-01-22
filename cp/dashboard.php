<?php
$crypt = "qwrqrdsgsdklcjkbkcjbkcf";

if($_COOKIE['a'] != md5($crypt)) {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/cp.css">
    <title>Панель управления</title>
  </head>
  <body>
    <div class="cp-wrapper">
      <div class="cp-top-info-block">
        <span class="auth-user">Вы вошли как, <b><?=$log_user?></b></span>
        <!--<img class="user__avatar" src="" width="35" height="35">-->
        <span class="ip-user">Client IP: <b><?=$_SERVER['REMOTE_ADDR']?></b></span>
        <a class="logout" href="logout.php">Выход</a>
      </div>
      <div class="cp-manage-panel">
        <?php
        define("CP_PAGE","page");
          switch($_GET['section']){
            case 'all_post': 
              include 'all_post.php';
                break;
            case 'users_list': 
              include 'users_list.php';
                break;
            case 'settings': 
              include 'settings.php';
                break;
            case 'add_post': 
              include 'add_post.php';
                break;                
            default: include 'all_post.php';
          }
        ?>
      </div>
      <div class="cp-main-menu">
        <ul class="cp-main-menu-list">
          <li class="cp-main-menu__item"><a class="cp-main-menu__link" href="?section=all_post">Статьи</a></li>
          <li class="cp-main-menu__item"><a class="cp-main-menu__link" href="?section=users_list">Пользователи</a></li>
          <li class="cp-main-menu__item"><a class="cp-main-menu__link" href="?section=settings">Настройки</a></li>
        </ul>
      </div>
    </div>
  </body>
</html>