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

session_start();
function logs($name) {
  $logfile = "logs/log.txt";
  $current = file_get_contents($logfile);
  $current .= $name." - ".$_SERVER["REMOTE_ADDR"]." - ".date('d-m-Y H:i:s')."\r\n";
  file_put_contents($logfile, $current);
}

function access($name) {
  $logfile = "logs/access.txt";
  $current = file_get_contents($logfile);
  $current .= $name." - ".$_SERVER["REMOTE_ADDR"]." - ".date('d-m-Y H:i:s')."\r\n";
  file_put_contents($logfile, $current);
}

$query = "SELECT `password`, `is_admin` FROM `users` WHERE `name` = '$username'";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);


if($row['password'] == $password) {
  if($row['is_admin']){
    setcookie('a', md5($crypt));
    $_SESSION['user'] = $username;
    logs($username);
    header("Location: manage.php");
  } else {
    header("Location: login.php?access=denied");
    exit();
  }
} else {
  access($username);
  header("Location: login.php?login=incorrect");
}
mysqli_close();