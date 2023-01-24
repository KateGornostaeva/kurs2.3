<?php //при загрузке каждой страницы получать сессию
session_start();
$session_user = (isset($_SESSION["user"])) ? $_SESSION["user"] : false;
?>
