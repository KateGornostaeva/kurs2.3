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
            <div class="main_header">
                <a href = "<?php $name='Map'; $link ='map.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a>
            </div>
            <div class="main_header">
                <a href = "<?php $name='Handling'; $link ='handling.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a>
            </div>
            <div class="main_header">
                <a href = "<?php $name='About us'; $link ='main.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a>
            </div>
            <div class="main_header">  
                <a href = "<?php $name='Sign in'; $link ='login.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a>
            </div>        
        </header>
        
        <div class = "site_page_reg">
            <form action="https://httpbin.org/post" method="post">
                <p><h3>Registration</h3></p>
                <p>Name</p>
                <p><input type="text" id = "name_user" size="40"></p>
                <p>Login</p>
                <p><input type="text" id = "login" size="40"></p>
                <p>Password</p>
                <p><input type="password" id = "password" size="40"></p>
                <p>Email</p>
                <p><input type="text" id = "email_user" size="40"></p>
                <p><button class="registration">Registration</button></p>
            </form>
        </div>

        <footer class="f">
            <div class="footer">
                <p>Copyright © 2023 Kate Gornostaeva Company. All rights reserved. 
            </div>
        </footer>
    </body>
</html>