<?php
$link=mysqli_connect("localhost", "a0611486_root", "root", "a0611486_os");
if (mysqli_connect_errno()){
printf("Не удалось подключиться: %s\n", mysqli_connect_error());
exit();
} // установление соединения с сервером и подключение к базе данных:
 // Строка запроса на добавление записи в таблицу:
mysqli_query($link,"INSERT INTO os SET os_name='". $_GET['os_name']."', os_type='".$_GET['os_type']."', os_bit='".$_GET['os_bit']."', os_dev='".$_GET['os_dev']."', os_users='".$_GET['os_users']. "'");
 if (mysqli_affected_rows($link)>0){ 
    print "<p>Спасибо, Ваша oc добавлена в базу данных.";
    print "<p><a href=\"index.php\"> Вернуться к списку ос </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку игр </a>"; 
     mysqli_close($link);
 }
?>
