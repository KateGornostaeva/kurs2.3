<?php 
include("session.php");
?>

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

        <div class="site_page_feedback">
            <form action="" method="post">
                <p><h3>Заявка</h3></p>
            
                <p>Введите текст</p>
                <p><textarea name="comment" placeholder="Ведите интересующий вас адрес" cols="50" rows="7"></textarea></p></p>
                <p><input type="checkbox" name="a" value="согласие">Я согласен(на) на обработку персональных данных</p>
                
                <p>
                    <input class="send" type="submit" value="Отправить">
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

<?php
require("connectdb.php");

if($_POST["comment"] != null){//если комментарий не пустой то отправляем в бд данные
    mysqli_query(
        $connect,
        "INSERT INTO handling (date, message, type, user_id) VALUES (
            now(),
            '" . $_POST['comment'] . "',
            'Отправлено',
            '" . $_SESSION['user']['id'] . "')"
    );
    header("Location: handling_page.php");
}
?>