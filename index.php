<?php
define("INDEX", "Load main page");
error_reporting( E_ERROR );

  if(file_exists("config.php")) {
    include "config.php";
  } else {
    error("config");
  }

  if(file_exists("libraries/page_view.php")) {
    include "libraries/page_view.php";
  } else {
    error("page_view");
  }

load_page($db, header, content, aside, footer);     