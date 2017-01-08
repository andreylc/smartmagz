<?php
error_reporting( E_ERROR );

$db = mysqli_connect("localhost", "root", "", "tricolor");

if(!$db) {
  echo "Нет соединения с базой данных<br>";
} else {
  include "inc/header.php";
  include "inc/content.php";
  include "inc/aside.php";
  include "inc/footer.php";
};




// do
// {
//   echo ('<div class="post-container">
//         <div class="post-image">
//         <img src="'.$row['img']);
//   echo ('" alt="Tablet" width="100%">
//         </div>
//         <div class="post-body">
//         <h2 class="post__title">'.$row['title'].'</h2>');
//   echo('<div class="post__meta meta--show">
//         <time class="post__time" datetime="2016-12-20" title="Дата публикации">19.12.2016</time>
//         <div class="post__category"><a class="post__category-link" href="#category" title="В разделе">Новости</a></div>
//         </div>
//         <div class="post__preview-text text--show">' .$row['post_preview'].'</div>
//         <div class="post__stats stats--show">
//         <!--<div class="post__views">115</div>
//         <div class="post__comments"></div>-->
//         <a class="read__more" href="#readmore">далее</a>
//         </div>
//         </div>
//         </div>');
// }
// while($row = mysqli_fetch_array($result));






// while( count($row) <= 10){
//   echo "<p>".$row["title"] ."</p>";
//   echo "<p>".$row["post_preview"]."</p>";
// }





// if($_SERVER['REQUEST_URI'] == '/GDrive/WORKSPACE/tricolor/'){
//   $page = 'home';
// } else {
//   $page = substr($_SERVER['REQUEST_URI'], 27);
//     if(!preg_match('/^[A-z0-9]{3,15}$/', $page)) {
//       exit("Не правильный URL");
//     }
// }
      