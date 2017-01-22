<?php
  if(defined("CP_PAGE")){
    
  } else {
    header("Location: login.php");
  }
?>
<h2>Добавить новую статью</h2>
<div class="cp-add-post">
  <form action="form_action.php" name="add-post" method="POST">
    <label class="add-post-label">Заголовок:
      <input class="add-post-input" type="text" name="title" required>
    </label>
    <label class="add-post-label">URL изображения:
      <input class="add-post-input" type="text" name="img" required>
    </label>
    <label class="add-post-label">Категория:
      <input class="add-post-input" type="text" name="category" required>
    </label>
    <label class="add-post-label">Превью текст:
      <textarea class="add-post-textarea" name="preview_text" cols="40" rows="5" required></textarea>
    </label>
    <label class="add-post-label">Текст записи:
      <textarea class="add-post-textarea" name="full_text" cols="60" rows="10" required></textarea>
    </label>
    <button class="">добавить запись</button>
  </form>
</div>