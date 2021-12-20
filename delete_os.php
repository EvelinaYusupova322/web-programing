<?php
$mysqli = new mysqli("localhost", "a0611486_root", "root", "a0611486_os") or die ("Невозможно
подключиться к серверу");
$id_os = $_GET['id_os'];
$result = $mysqli->query("DELETE FROM os WHERE id_os='$id_os'");
header("Location: index.php");
exit;
?>
