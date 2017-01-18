<?php
  if($_COOKIE['a']){
    setcookie('a','');
    header("Location: login.php");
  }
?>