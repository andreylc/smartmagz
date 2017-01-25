      <div class="content"> <!--content start-->
        <div class="layout breadcrumbs">
          <a class="breadcrumbs__link" href="index.php">Главная /</a>
          <a class="breadcrumbs__link" href="#bread">Лента /</a>        
        </div>
        <div class="layout flex"> <!--layout start-->
          <main class="feed flex">
            <?php
              if(defined("INDEX")){
                load_feed($db);
              } else if(1) {
                load_post_body($db);
                load_single_page();
              } else {
                echo "Возникли проблемы при загрузке статьи";
              }
            ?>
          </main>
