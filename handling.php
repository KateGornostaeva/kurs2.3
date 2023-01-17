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

        <?php
            if (isset($_GET['N'])) {$name =$_GET['N'];} else {$name='';}
            if (isset($_GET['E'])) {$email =$_GET['E'];} else {$email='';}
            if (isset($_GET['R'])) {$radio =$_GET['R'];} else {$radio='';}

        ?>

        <div class="site_page_feedback">
            <form action="site_answer.php" method="post" enctype="multipart/form-data">
                <p><h3>Handling</h3></p>
                <p>Name</p>
                <p><input type="text" id = "fio" name="fio" size="40"  value="<?=$name ?>"></p>
                
                <p>Email</p>
                <p><input type="text" id = "email" name = "email" size="40" value="<?=$email ?>"></p>

                <p>Enter your message</p>
                <p><textarea name="comment" cols="40" rows="6"></textarea></p></p>
                
                <p><select name="select">
                    <option>Complaint</option>
                    <option>Suggestion</option>
                </select></p>

                <p><input type="checkbox" name="a" value="согласие">I agree to the processing of personal data</p>
                
                <p><button class="send">Send</button></p>
                <!--<p><input type="submit" value="Send"></p> -->
                
            
            </form>
        </div>

        <footer class="f">
            <div class="footer">
                <p>Copyright © 2023 Kate Gornostaeva Company. All rights reserved. 
            </div>
        </footer>
    </body>
</html>