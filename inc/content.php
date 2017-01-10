      <div class="content"> <!--content start-->
        <div class="layout breadcrumbs">
          <a class="breadcrumbs__link" href="/index.php">Главная /</a>
          <a class="breadcrumbs__link" href="#bread">Лента /</a>        
        </div>
        <div class="layout flex"> <!--layout start-->
          <main class="feed flex">
            <?php
              if(defined("INDEX")){
             load_feed($db);
              }else {
                load_post_content($db);
              };
            ?>
          </main>
