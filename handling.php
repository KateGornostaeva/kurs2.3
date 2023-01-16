
<?php
    if (isset($_GET['N'])) {$name =$_GET['N'];} else {$name='';}
    if (isset($_GET['E'])) {$email =$_GET['E'];} else {$email='';}
    if (isset($_GET['R'])) {$radio =$_GET['R'];} else {$radio='';}

?>

<div class="site_page_feedback">
    <form action="site_answer.php" method="post" enctype="multipart/form-data">
        <p><h3>Обратная связь</h3></p>
        <p>ФИО</p>
        <p><input type="text" id = "fio" name="fio" size="40"  value="<?=$name ?>"></p>
        
        <p>Электронная почта</p>
        <p><input type="text" id = "email" name = "email" placeholder="email" size="40" value="<?=$email ?>"></p>

        <p>Введите ваше сообщение</p>
        <p><textarea name="comment" cols="40" rows="6"></textarea></p></p>
        <p><input type="file" name="file">

        <p><select name="select">
            <option>Жалоба</option>
            <option>Предложение</option>
        </select></p>

        <p><input type="checkbox" name="a" value="согласие"> Даю согласие на обработку персональных данных</p>
        
        <p><input type="submit" value="Отправить"></p>
    
    </form>
</div>
