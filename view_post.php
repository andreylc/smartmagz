<?php
error_reporting( E_ERROR );

 if(file_exists("config.php")) {
    include "config.php";
  } else {
    error("config");
  }

if(file_exists("libraries/page_view.php")) {
    include "libraries/page_view.php";
  } else {
    error("view_post");
  };

load_page($db, header, content ,aside , footer);