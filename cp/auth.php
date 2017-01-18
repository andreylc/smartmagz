<?php
//error_reporting( E_ERROR );

$username = trim($_POST['username']);
$username = strip_tags($username);
$username = htmlspecialchars($username);
$username = mysql_escape_string($username);

$password = trim($_POST['password']);
$password = strip_tags($password);
$password = htmlspecialchars($password);
$password = mysql_escape_string($password);


require_once "../lib.php";
$crypt = "qwrqrdsgsdklcjkbkcjbkcf";


$query = "SELECT `password`, `is_admin` FROM `users` WHERE `name` = '$username'";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);


session_start();

if($row['password'] == $password) {
  if($row['is_admin']){
    setcookie('a', md5($crypt));
    $_SESSION['user'] = $username;
    header("Location: manage.php");
  } else {
    header("Location: login.php?access=denied");
    exit();
  }
} else {
  header("Location: login.php?login=incorrect");
}
mysqli_close();