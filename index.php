<?php
define("INDEX", "Load main page");
error_reporting( E_ERROR );

  if(file_exists("lib.php")) {
    include "lib.php";
  } else {
    exit("Ошибка при загрузке библиотеки");
  };

load_page($db, header, content, aside, footer);     