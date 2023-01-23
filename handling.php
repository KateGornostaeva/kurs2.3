<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>kurs</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="main.css">  <!--подключение стилей css -->
        <!--подключение шрифтов -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <div class="main_header">
                <a href = "<?php $name='Карта'; $link ='map.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a>
            </div>
            <div class="main_header">
                <a href = "<?php $name='О нас'; $link ='main.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a>
            </div>
            <div class="main_header">  
                <a href = "<?php $name='Заявки'; $link ='login.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a>
            </div>        
        </header>

        <?php
            if (isset($_GET['N'])) {$name =$_GET['N'];} else {$name='';}
            if (isset($_GET['E'])) {$email =$_GET['E'];} else {$email='';}
            if (isset($_GET['R'])) {$radio =$_GET['R'];} else {$radio='';}
        ?>

        <div class="site_page_feedback">
            <form action="site_answer.php" method="post" enctype="multipart/form-data">
                <p><h3>Заявка</h3></p>
            
                <p>Введите текст</p>
                <p><textarea name="comment" placeholder="Ведите текст, к примеру: Проверьте пожалуйста воздух по адресу 4-я Парковая улица, 13" cols="50" rows="7"></textarea></p></p>
                
                <!--<p><select name="select">
                    <option>Complaint</option>
                    <option>Suggestion</option>
                </select></p>-->

                <p><input type="checkbox" name="a" value="согласие">Я согласен(на) на обработку персональных данных</p>
                
                <p>
                    <button class="send">Отправить</button>
                    <button class="back_handling">
                        <a href = "<?php $name='Назад'; $link ='handling_page.php'; $current_page=true; echo $link;?>">
                        <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода --></a>
                    </button>
                </p>
            </form>
        </div>

        <footer class="f">
            <div class="footer">
                <p>Использованы открытые данные с сайта <a href="https://data.mos.ru/opendata/2457">data.mos.ru</a></p>
                <p>Copyright © 2023 Kate Gornostaeva Company. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>