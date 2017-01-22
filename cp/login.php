<?php
$crypt = "qwrqrdsgsdklcjkbkcjbkcf";
  session_start();
  if($_COOKIE['a'] == md5($crypt)){
  header("Location: manage.php");
}
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/cp.css">
    <script src="main.js"></script>
    <title>Авторизация</title>
  </head>
  <body>
      <div class="login-container">
        <form name="auth_cp" action="auth.php" method="POST">
          <div class="login-title">Авторизация пользователя</div>
          <div class="login__notice">
            <?php
            if($_GET['login'] == 'incorrect') {
              echo 'Неправильный логин или пароль!';
            } elseif($_GET['access'] == 'denied'){
              echo 'Недостаточно прав, обратитесь к администратору.';
            }
            ?>
          </div>
          <label class="login__label" for="username">Имя пользователя:</label>
            <input class="login__input" type="text" name="username" id="username" required autofocus>
          <label class="login__label" for="userpass">Пароль:</label>
            <input class="login__input" type="password" name="password" id="userpass" required>
            <button class="login__submit">Вход</button>
        </form>
        <a class="login__link" href="../index.php">Главная</a>
      </div>
  </body>
</html>