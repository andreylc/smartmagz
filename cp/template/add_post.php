<?php
  if(defined("CP_PAGE")){
    
  } else {
    header("Location: login.php");
  }

  define("ADDPOST", "add-post")
?>
<h2 class="add-post-title">Добавить новую статью</h2>
<div class="cp-add-post">
  <form action="form_action.php" name="add-post" method="POST">
    <label for="title" class="add-post-label">Заголовок:</label>
      <input id="title" class="add-post-input" type="text" name="title" required>
    <label for="imgurl" class="add-post-label">URL изображения:</label>
      <input id="imgurl" class="add-post-input" type="text" name="img" required>
    <label for="category" class="add-post-label">Категория:</label>
      <input id="category" class="add-post-input" type="text" name="category" required>
    <label for="preview" class="add-post-label">Превью текст:</label>
      <textarea id="preview" class="add-post-textarea" name="preview_text" cols="40" rows="5" required></textarea>
    <label for="full_text" class="add-post-label">Текст записи:</label>
      <textarea id="full_text" class="add-post-textarea" name="full_text" cols="60" rows="10" required></textarea>
    <button class="public-post-btn">добавить запись</button>
  </form>
</div>