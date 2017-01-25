<?php
  if($_COOKIE['a']){
    setcookie('a','', 10, "/");
    header("Location: login.php");
  } else {
    header("Location: login.php");
  }
?>