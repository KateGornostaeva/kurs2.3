<?php
$connect = mysqli_connect("std-mysql", "std_2011_kurs2", "std_2011_kurs2", "std_2011_kurs2", 3306);
if($connect === false){
    die("Error: connection error. " . mysqli_connect_error());
}
mysqli_set_charset($connect, "utf8");
?>
