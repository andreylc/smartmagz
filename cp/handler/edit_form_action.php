<?php
 header("Location: ../manage.php");

if($_POST['isset'] == "1"){

require_once "../../config.php";

session_start();

$num = $_SESSION['number'];

$title = trim($_POST['title']);
$title = strip_tags($title);
$title = htmlspecialchars($title);
$title = mysql_escape_string($title);

$img = trim($_POST['img']);
$img = strip_tags($img);
$img = htmlspecialchars($img);
$img = mysql_escape_string($img);

$category = trim($_POST['category']);
$category = strip_tags($category);
$category = htmlspecialchars($category);
$category = mysql_escape_string($category);

$preview_text = trim($_POST['preview_text']);
$preview_text = strip_tags($preview_text);
$preview_text = htmlspecialchars($preview_text);
$preview_text = mysql_escape_string($preview_text);

$full_text = trim($_POST['full_text']);
$full_text = strip_tags($full_text);
$full_text = htmlspecialchars($full_text);
$full_text = mysql_escape_string($full_text);

$query = "UPDATE `posts` SET `img` ='$img', `title`='$title', `post_category`='$category', `post_preview`='$preview_text', `full_text`='$full_text' WHERE `id`='$num'";
$result = mysqli_query($db, $query);
  // $row = mysqli_fetch_assoc($result);

  if($result) {
    header("Location: ../manage.php?section=all_post&status=ok");
  } else {
    header("Location: ../manage.php?section=all_post&notice=error");
  }

}
