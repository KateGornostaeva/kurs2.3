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
                <b><a href = "<?php $name='Заявки'; $link ='login.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a></b>
            </div>        
        </header>

        <main>
            <div class="main_table">
                <h1 class="main_table_text">Заявки</h1>
            
                <div class="table_t">
                    <table id="h_table">

                        <tr> 
                            <th>Имя</th><th>Дата</th><th>Текст</th><th>Статус</th>
                        </tr>
<?php //обращение к бд
    require("connectdb.php");
    $user = $_SESSION["user"];
    $query = mysqli_query($connect,"SELECT * FROM handling JOIN users ON handling.user_id = users.id WHERE user_id='" . $user["id"] . "' ");
    while($data = mysqli_fetch_assoc($query)){
?>
                        <tr> <!-- заполнение таблицы из бд -->
                            <td><?=$data["name"]?></td>
                            <td><?=$data["date"]?></td><td><?=$data["message"]?></td><td><?=$data["type"]?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                
                <div class="table_button"><p>
                    <button class="handling">
                        <a href = "<?php $name='Написать заявку'; $link ='handling.php'; $current_page=true; echo $link;?>">
                        <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода --></a>
                    </button>
                </p></div>
                
                <div class="text_handling">
                    <p>
                        На данной странице вы можете отправить заявку на исследование воздуха в месте, не отмеченном на нашей карте или там, 
                        где, как вам кажется, качество воздуха изменилось, и вы хотели бы проверить его еще раз.
                    </p>
                    <p>
                        Изменение статуса заявки можно отследить на сайте в разделе "Заявки", а так же вам на почту будет отправлено письмо с уведомлением.
                    </p>
                </div>
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
        