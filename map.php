<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>kurs</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="map.css">  <!--подключение стилей css -->
    <!--подключение шрифтов -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    
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
  </head>
  
  <body>
    <header>
    </header>
    
    <main class="body_buttons">
      <div class="search-form">
        <input type="text" placeholder="Search" class="search-field">
        <button class="search-btn"><img src="Search.png"></button>
      </div>

      <div class="authorization">
        <a href = "<?php $name='Sign in'; $link ='login.php'; $current_page=true; echo $link;?>">
          <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
        </a>
      </div>

      <div class="zoom">
        <div class="nearer">
        <button class="plus">+</button>
      </div>
      <div class="farther">
        <button class="minus">-</button>
        </div>
      </div>

      <div class="legend">
        <div class="good_air">
          <div class="good_air_text"><p>Norm not exceeded</p></div>
        </div>
        <div class="bad_air">
          <div class="bad_air_text"><p>Norm is exceeded</p></div>
        </div>
        <div class="switch_on_off">
          <div class="switch_on_off_text"><p>Display air quality</p></div>
          <div class="switch_img"><img src="Done.png"></div>
        </div>
      </div>

      <div class="menu">
        <div class="menu_text"><a href = "<?php $name='Main page'; $link ='main.php'; $current_page=true; echo $link;?>">
          <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
        </a></div>
      </div>

    </main>

    <footer class="f">
      <div class="footer">
        <p>Copyright © 2023 Kate Gornostaeva Company. All rights reserved. 
      </div>
    </footer>

    <div class="map_m">
      <!-- контейнер для карты -->
        <div id="map_r"></div>
      <!-- кнопка для вызова функции -->
        <button id="my_position">My Position</button>
      <!-- наш скрипт-модуль -->
        <script src="script.js" type="module"></script>
    </div>
    
  </body> 
</html>