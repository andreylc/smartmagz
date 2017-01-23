<?php
$crypt = "qwrqrdsgsdklcjkbkcjbkcf";

session_start();
$log_user = $_SESSION['user'];
if($_COOKIE['a'] == md5($crypt)) {
  if(file_exists("template/dashboard.php")){
    require "template/dashboard.php";
  }
} else {
  header("Location: login.php");
}
