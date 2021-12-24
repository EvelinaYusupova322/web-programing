<?php
$host = 'localhost';
$database = 'a0611486_os';
$user = 'a0611486_root';
$password = 'root';
$link = mysqli_connect($host, $user, $password, $database) or die("ошибка в конекте" . mysqli_error($link));
?>
