<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#03A9F4">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Портал создан для помощи абонентам в поиске информации по продукции Триколор ТВ, 
      а так же для помощи в настройке оборудования">
    <meta name="keywords" content="триколор, тв, приемник, ресивер, гс, gs, general satellite, настройка, каналы, спутник">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?137"></script>
    <script type="text/javascript">VK.init({apiId: 5840638, onlyWidgets: true});</script>
    <title>ТриколорТВ Инфо<?=' | '.$title ?></title>
  </head>
  <body>
    <div class="wrapper"> <!--wrapper start-->
      <header class="header">
        <div class="layout">
          <div class="top-panel"></div>
          <div class="logo-container">
            <div class="logo__box">
              <img class="logo" src="img/logo.svg" alt="Logo" width="50" height="50"> 
              <h1 class="site__name">триколор<span class="site__name--red">тв</span></h1>
              <span class="site__name-description">информационный портал</span>
            </div>
            <div class="search-container">
              <input class="top-search" type="search" placeholder="Поиск">
            </div>
            <div class="hamburger"></div>
          </div>
          <nav class="top-nav height-none">
            <ul class="main-menu">
              <li class="main-menu__item"><a class="main-menu__link" href="index.php">Новости</a></li>
              <li class="main-menu__item"><a class="main-menu__link" href="view_post.php?page=instruction">Инструкции</a></li>
              <li class="main-menu__item"><a class="main-menu__link" href="view_post.php?page=reciever">Ресиверы</a></li>
              <li class="main-menu__item"><a class="main-menu__link" href="view_post.php?page=activation">Активация</a></li>
              <li class="main-menu__item"><a class="main-menu__link" href="view_post.php?page=disqus">Обсуждения</a></li>
              <li class="main-menu__item"><a class="main-menu__link" href="view_post.php?page=help">Помощь</a></li>
              <?php
                require "cp/handler/variables.php";
                if($_COOKIE['a'] == md5($crypt)) {
                  echo '<li class="main-menu__item"><a class="main-menu__link" href="cp/login.php">Manage site</a></li>';
                }
              ?>  
            </ul>
          </nav>
        </div>
      </header>