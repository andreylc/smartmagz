<?php

echo '<div class="view-post-container">
  <div class="view-post-image">
    <img src="'.$row['img']; 
echo '" width="100%">'; 
?>
  </div>
  <div class="view-post-body">
    <div class="post__title view-post--title"><?=$row['title']?></div>
    <div class="post__meta">
      <time class="post__time" datetime="2016-12-20" title="Дата публикации"><?=$row['post_date']?></time>
      <div class="post__category"><a class="post__category-link" href="#category" title="В разделе">Новости</a></div>
      <div class=post__views><?=$row['post_views']?></div>
    </div>
    <div class="post__full-text"><?=$row['full_text']?></div>
    <div class="social-share">
      <div id="vk_like"></div>
        <script type="text/javascript">VK.Widgets.Like("vk_like", {type: "button", height: 24});</script>
      </div>
      <div class="comments">
        <div id="vk_comments"></div>
          <script type="text/javascript">VK.Widgets.Comments("vk_comments", {limit: 10, width: "", attach: "*"});</script>
      </div>
  </div>
</div>

