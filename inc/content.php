      <div class="content"> <!--content start-->
        <div class="layout breadcrumbs">
          <a class="breadcrumbs__link" href="#bread">Главная /</a>
          <a class="breadcrumbs__link" href="#bread">Лента /</a>        
        </div>
        <div class="layout flex"> <!--layout start-->
          <main class="feed flex">
            <?php
            $query = "SELECT * FROM `posts` ORDER BY `post_date` DESC";
            $result = mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($result);
            do
              {
                echo ('<div class="post-container">
                      <div class="post-image">
                      <img src="'.$row['img']);
                echo ('" alt="Tablet" width="100%">
                      </div>
                      <div class="post-body">
                      <h2 class="post__title">'.$row['title'].'</h2>');
                echo('<div class="post__meta meta--show">
                      <time class="post__time" datetime="2016-12-20" title="Дата публикации">'.$row[post_date]);
                echo('</time>
                      <div class="post__category"><a class="post__category-link" href="#category" title="В разделе">Новости</a></div>
                      </div>
                      <div class="post__preview-text text--show">' .$row['post_preview'].'</div>
                      <div class="post__stats stats--show">
                      <!--<div class="post__views">115</div>
                      <div class="post__comments"></div>-->
                      <a class="read__more" href="#readmore">далее</a>
                      </div>
                      </div>
                      </div>');
            }
          while($row = mysqli_fetch_array($result));
          ?>
          </main>
