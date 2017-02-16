<?php
session_start();
  if(defined("CP_PAGE")){
    require_once "../config.php";
            $query = "SELECT * FROM `posts` WHERE `id` = ".$_GET['id'];
            $result = mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($result) or die(mysql_error()); 
            $_SESSION['number'] = $_GET['id'];
  } else {
    header("Location: login.php");
  }
?>
<script>
  function cancel() {
  window.location = "manage.php";
  };
</script>
  <h2 class="add-post-title">Редактировать статью</h2>
<div class="cp-add-post">
  <form action="handler/edit_form_action.php" name="add-post" method="POST">
    <label for="num" class="add-post-label">ID:</label>
      <input id="num" class="add-post-input" type="text" name="num" value="<?=$row['id']?>" disabled>
    <label for="title" class="add-post-label">Заголовок:</label>
      <input id="title" class="add-post-input" type="text" name="title" value="<?=$row['title']?>" required>
    <label for="imgurl" class="add-post-label">URL изображения:</label>
      <input id="imgurl" class="add-post-input" type="text" name="img" value="<?=$row['img']?>" required>
    <label for="category" class="add-post-label">Категория:</label>
      <input id="category" class="add-post-input" type="text" name="category" value="<?=$row['post_category']?>" required>
    <label for="preview" class="add-post-label">Превью текст:</label>
      <textarea id="preview" class="add-post-textarea" name="preview_text" cols="40" rows="5" required><?=$row['post_preview']?></textarea>
    <label for="full_text" class="add-post-label">Текст записи:</label>
      <textarea id="full_text" class="add-post-textarea" name="full_text" cols="60" rows="10" required><?=$row['full_text']?></textarea>
    <button class="public-post-btn">применить</button>
    <button type="button" class="public-post-btn" onclick="cancel()">отмена</button>
    <input type="hidden" name="isset" value="1">
  </form>
</div>