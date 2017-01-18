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
        <h2>Dashboard</h2>
        <table class="cp-post-list">
          <tr>
            <td>id</td>
            <td>Дата публикации</td>
            <td>Изображение</td>
            <td>Заголовок</td>
            <td>Категория</td>
            <td>Превью</td>
            <td>Содержание</td>
          </tr>
<?php
          include "../lib.php";

            $query = "SELECT * FROM `posts` ORDER BY `post_date` DESC";
            $result = mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($result);
            do
              {
                echo '<tr>
                  <td>'.$row['id'].'</td>
                  <td>'.$row['post_date'].'</td>
                  <td>'.$row['img'].'</td>
                  <td>'.$row['title'].'</td>
                  <td>'.$row['post_category'].'</td>
                  <td>'.$row['post_preview'].'</td>
                  <td>'.$row['full_text'].'</td>
                </tr>';
            }
            while($row = mysqli_fetch_array($result));
            mysqli_close($db);
?>
        </table>
      </div>
      <div class="cp-main-menu">
        <ul class="cp-main-menu-list">
          <li class="cp-main-menu__item"><a class="cp-main-menu__link" href="#">Статьи</a></li>
          <li class="cp-main-menu__item"><a class="cp-main-menu__link" href="#">Пользователи</a></li>
          <li class="cp-main-menu__item"><a class="cp-main-menu__link" href="#">Настройки</a></li>
        </ul>
      </div>
    </div>
  </body>
</html>