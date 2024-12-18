<?php
$file_name = $_POST['file_name'];
$content = $_FILE['content'];

if (!empty($file_name)) { //Проверка на заполнение названия файла
    if (!empty($content)) { //Проверка на то, что файл выбран
        $uploaddir = 'C:\Program Files\Ampps\www';
        $uploadfile = $uploaddir . basename($_FILES['content']['name']);
        
        if (move_uploaded_file($_FILES['content']['tmp_name'], $uploadfile)){
            echo 'Файл корректен и был успешно загружен.' . PHP_EOL;
        } else {
            echo 'Возможно атака с помощью файловой загрузки!' . PHP_EOL;
        }
        echo '<pre>';
        echo 'Некоторая отладочная информация'; 
        echo '<pre>';
        var_dump($_FILES);
        echo '<pre>';
    } else {
        header("Location: index.html"); //Если файл отсутствует, то редирект на index.html
        exit();
    }
} else {
    header("Location: index.html"); // Если поле названия не заполнено , то редирект на index.html
    exit();
}