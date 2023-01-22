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

        <main>
            <div class="main_table">
                <h1>Заявки</h1>
            
                <div class="table">
                    <table>
                        <tr> 
                            <th>&nbsp;</th><th>Имя</th>
                            <th>Дата</th><th>Текст</th><th>Статус</th>
                        </tr>
                        <tr> 
                            <td>1</td><td>Имя Фамилия Отчество</td>
                            <td>Дата</td><td>Текст текст текст текст текст текст текст</td><td>Отправлен</td>
                        </tr>
                        <tr> 
                            <td>2</td><td>29</td>
                            <td>34</td><td>48</td><td>36</td>
                        </tr>
                        <tr> 
                            <td>3</td><td>38</td>
                            <td>57</td><td>36</td><td>36</td>
                        </tr>
                        <tr> 
                            <td>4</td><td>38</td>
                            <td>57</td><td>36</td><td>36</td>
                        </tr>
                    </table>
                </div>
                
                <p>
                    <button class="handling">
                        <a href = "<?php $name='Написать заявку'; $link ='handling.php'; $current_page=true; echo $link;?>">
                        <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода --></a>
                    </button>
                </p>
            </div>
        </main>

        <footer class="f">
            <div class="footer">
                <p>Использованы открытые данные с сайта <a href="https://data.mos.ru/opendata/2457">data.mos.ru</a></p>
                <p>Copyright © 2023 Kate Gornostaeva Company. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
        