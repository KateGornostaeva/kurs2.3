<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>kurs</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="main.css">  <!--подключение стилей css -->
        <!--подключение шрифтов -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <h1>Map</h1>
            <h1>Handling</h1>
            <h1>About us</h1>
            <h2>User name</h2>
        </header>
        
        <div class = "site_page_login">
            <form action="https://httpbin.org/post" method="post">
                <p><h3>Войти в учетную запись</h3></p>
                <p>Логин</p>
                <p><input type="text" id = "login" size="40"></p>
                <p>Пароль</p>
                <p><input type="password" id = "password" size="40"></p>
                <p><input type="submit" value="Войти"></p>
                <p><input type="checkbox" id="rememberMe" name="a" value="запомнить_меня"> Запомнить меня</p>
            </form>
        </div>

        <footer class="f">
            <div class="footer">
                <p>Copyright © 2023 Kate Gornostaeva Company. All rights reserved. 
            </div>
        </footer>
    </body>
</html>