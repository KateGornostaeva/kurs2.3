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
                <a href = "<?php $name='О нас'; $link ='index.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a>
            </div>
            <div class="main_header">  
                <b><a href = "<?php $name='Заявки'; $link ='login.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a></b>
            </div>        
        </header>
        
        <div class = "site_page_login">
            <form method="POST" action="">
                <p><h3>Войти в свой аккаунт</h3></p>
                <p>Логин</p>
                <p><input type="text" name = "login" size="40"></p>
                <p>Пароль</p>
                <p><input type="password" name = "password" size="40"></p>
                <p><input class="login" type="submit" value="Войти"></p>
                <p><input type="checkbox" id="rememberMe" name="a" value="Remember_me">Запомнить меня</p>
                <p><button class="reg">
                    <a href = "<?php $name='Регистрация'; $link ='registration.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?></a>
                </button></p>
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

    if($_POST["login"] != null){
        // Вытаскиваем из БД запись, у которой логин равняется введенному
        $query = mysqli_query($connect,"SELECT * FROM users WHERE login='" . $_POST["login"] . "' LIMIT 1");
        $data = mysqli_fetch_assoc($query);

        // Сравниваем пароли
        if($data['password'] === $_POST['password']){

            // Переадресовываем браузер на страницу проверки нашего скрипта
            session_start();
            $_SESSION["user"] = $data;
            header("Location: handling_page.php"); 
            exit();
        }
        else{
            echo "Вы ввели неправильный логин/пароль";
        }
    }
?>