<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>kurs</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="map.css">  <!--подключение стилей css -->
    <!--подключение шрифтов -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
        
    
    <!-- стили карты -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""
      />
      <!-- скрипт карты -->
      <script
        src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""
      ></script>
      <script src = "jquery-3.6.3.min.js"></script>
      <script src = "map.js"></script>
  </head>
  
  <body>
    <header>
      <div class="main_header">
        <a href = "<?php $name='Карта'; $link ='map.php'; $current_page=true; echo $link;?>">
          <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
        </a>
      </div>
      <div class="main_header">
        <a href = "<?php $name='Заявки'; $link ='handling_page.php'; $current_page=true; echo $link;?>">
          <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
        </a>
      </div>
      <div class="main_header">
        <a href = "<?php $name='О нас'; $link ='main.php'; $current_page=true; echo $link;?>">
          <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
        </a>
      </div>
      <div class="main_header">  
        <a href = "<?php $name='Войти'; $link ='login.php'; $current_page=true; echo $link;?>">
          <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
        </a>
      </div>        
    </header>

    <div class="map_m">
      <!-- контейнер для карты -->
        <div id="map"></div>
      <!-- кнопка для вызова функции 
        <button id="my_position">Мое местоположение</button>-->
      <!-- наш скрипт-модуль -->
        <script src="script.js" type="module"></script>
    </div>

    <main class="body_buttons">
      <div class="search-form">
        <input type="text" placeholder="Поиск" class="search-field">
        <button class="search-btn"><img src="Search.png"></button>
      </div>

      <div class="legend">
        <div class="good_air">
          <div class="good_air_text"><p>Норма не превышена</p></div>
        </div>
        <div class="bad_air">
          <div class="bad_air_text"><p>Норма превышена</p></div>
        </div>
    </main>

    <footer class="f">
      <div class="footer">
        <p>Copyright © 2023 Kate Gornostaeva Company. All rights reserved. 
      </div>
    </footer>
  </body> 
</html>