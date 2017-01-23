<?php
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","tricolor");

$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);


function error($module_name) {
  exit("<b>ERROR LOADING ".$module_name."MODULE</b>");
}