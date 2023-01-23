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
        <script src = "jquery-3.6.3.min.js"></script>
        <script src = "jquery.cookie.js"></script>
        <script src = "handling.js"></script>
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

        <main>
            <div class="main_table">
                <h1 class="main_table_text">Заявки</h1>
            
                <div class="table">
                    <table>
                        <tr> 
                            <th>&nbsp;</th><th>Имя</th>
                            <th>Дата</th><th>Текст</th><th>Статус</th>
                        </tr>
                        <tr> 
                            <td>1</td><td>Горностаева Екатерина Андреевна</td>
                            <td>23.01.2023</td><td>Проверьте пожалуйста воздух по адресу 4-я Парковая улица, 13</td><td>Отправлено</td>
                        </tr>
                        <tr> 
                            <td>2</td><td>Горностаева Екатерина Андреевна</td>
                            <td>10.10.2020</td><td>Проверьте пожалуйста воздух по адресу Первомайская улица, 42</td><td>Выполнено</td>
                        </tr>
                        <tr> 
                            <td>3</td><td>Горностаева Екатерина Андреевна</td>
                            <td>03.02.2018</td><td>Проверьте пожалуйста воздух по адресу 6-я Парковая улица, 6</td><td>Выполнено</td>
                        </tr>
                        <tr> 
                            <td>4</td><td>Горностаева Екатерина Андреевна</td>
                            <td>05.05.2015</td><td>Проверьте пожалуйста воздух по адресу 7-я Парковая улица, 2к4</td><td>Выполнено</td>
                        </tr>
                        <tr> 
                            <td>1</td><td>Горностаева Екатерина Андреевна</td>
                            <td>23.01.2023</td><td>Проверьте пожалуйста воздух по адресу 4-я Парковая улица, 13</td><td>Отправлено</td>
                        </tr>
                        <tr> 
                            <td>2</td><td>Горностаева Екатерина Андреевна</td>
                            <td>10.10.2020</td><td>Проверьте пожалуйста воздух по адресу Первомайская улица, 42</td><td>Выполнено</td>
                        </tr>
                        <tr> 
                            <td>3</td><td>Горностаева Екатерина Андреевна</td>
                            <td>03.02.2018</td><td>Проверьте пожалуйста воздух по адресу 6-я Парковая улица, 6</td><td>Выполнено</td>
                        </tr>
                        <tr> 
                            <td>4</td><td>Горностаева Екатерина Андреевна</td>
                            <td>05.05.2015</td><td>Проверьте пожалуйста воздух по адресу 7-я Парковая улица, 2к4</td><td>Выполнено</td>
                        </tr>
                        <tr> 
                            <td>1</td><td>Горностаева Екатерина Андреевна</td>
                            <td>23.01.2023</td><td>Проверьте пожалуйста воздух по адресу 4-я Парковая улица, 13</td><td>Отправлено</td>
                        </tr>
                        <tr> 
                            <td>2</td><td>Горностаева Екатерина Андреевна</td>
                            <td>10.10.2020</td><td>Проверьте пожалуйста воздух по адресу Первомайская улица, 42</td><td>Выполнено</td>
                        </tr>
                        <tr> 
                            <td>3</td><td>Горностаева Екатерина Андреевна</td>
                            <td>03.02.2018</td><td>Проверьте пожалуйста воздух по адресу 6-я Парковая улица, 6</td><td>Выполнено</td>
                        </tr>
                        <tr> 
                            <td>4</td><td>Горностаева Екатерина Андреевна</td>
                            <td>05.05.2015</td><td>Проверьте пожалуйста воздух по адресу 7-я Парковая улица, 2к4</td><td>Выполнено</td>
                        </tr>
                        <tr> 
                            <td>1</td><td>Горностаева Екатерина Андреевна</td>
                            <td>23.01.2023</td><td>Проверьте пожалуйста воздух по адресу 4-я Парковая улица, 13</td><td>Отправлено</td>
                        </tr>
                        <tr> 
                            <td>2</td><td>Горностаева Екатерина Андреевна</td>
                            <td>10.10.2020</td><td>Проверьте пожалуйста воздух по адресу Первомайская улица, 42</td><td>Выполнено</td>
                        </tr>
                        <tr> 
                            <td>3</td><td>Горностаева Екатерина Андреевна</td>
                            <td>03.02.2018</td><td>Проверьте пожалуйста воздух по адресу 6-я Парковая улица, 6</td><td>Выполнено</td>
                        </tr>
                        <tr> 
                            <td>4</td><td>Горностаева Екатерина Андреевна</td>
                            <td>05.05.2015</td><td>Проверьте пожалуйста воздух по адресу 7-я Парковая улица, 2к4</td><td>Выполнено</td>
                        </tr>
                    </table>
                </div>
                
                <div class="table_button"><p>
                    <button class="handling">
                        <a href = "<?php $name='Написать заявку'; $link ='handling.php'; $current_page=true; echo $link;?>">
                        <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода --></a>
                    </button>
                </p></div>
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
        