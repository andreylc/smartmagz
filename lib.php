<?php

$db = mysqli_connect("localhost", "root", "", "tricolor");



function load_page($db, $block1, $block2, $block3, $block4){
  if(!$db) {
  exit ("Нет соединения с базой данных");
  } else {
    if(file_exists("inc/header.php") && file_exists("inc/content.php") && file_exists("inc/aside.php") && file_exists("inc/footer.php")){
      include "inc/".$block1.".php";
      include "inc/".$block2.".php";
      include "inc/".$block3.".php";
      include "inc/".$block4.".php";
    } else {  
        exit("Возникли проблемы при загрузке страницы");
      };
   };
};


function load_feed($db){
  $query = "SELECT * FROM `posts` ORDER BY `post_date` DESC";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);
  do
    {
      include "inc/feed.php";
   }
  while($row = mysqli_fetch_array($result));
  mysqli_close();
};

function load_post_body($db) {
  $query = "SELECT * FROM `posts` WHERE `id` = ".$_GET['id'];
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);
  if(file_exists("inc/post_content.php")){
    require_once "inc/post_content.php";
  };
}
?>