<?php
session_start();
// Проверяем, существует ли уже счетчик посещений
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
// Увеличиваем счетчик посещений
$_SESSION['count']++;
// Проверка на кратность посещения третьей страницы
if ($_SESSION['count'] % 3 == 0) {
//    header('Location: <file_name class="html"></file_name>');
    header('Location: file_name.html');
    exit();
}
echo "<p>Вы посещали третью страницу ".$_SESSION['count']." раз(а).</p>";
?>