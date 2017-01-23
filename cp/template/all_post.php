<?php
  if(defined("CP_PAGE")){
    
  } else {
    header("Location: ../login.php");
  }
?>

<h2>Все статьи</h2>
        <a class="cp-add-post-btn" href="?section=add_post">Добавить</a>
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
          include "../config.php";

            $query = "SELECT * FROM `posts` ORDER BY `id` DESC";
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