<?php
if (!empty($_POST['file_name'])) { 
    
    if (isset($_FILES['content'])) {
        $uploaddir = 'C:\Program Files\Ampps\www\1';
        $uploadfile = basename($_POST['file_name']); //$uploaddir . basename($_FILES['content']['name']);

        if (move_uploaded_file($_FILES['content']['tmp_name'], $uploadfile)){
            echo 'Файл корректен и был успешно загружен.' . PHP_EOL;
        } else {
            //echo 'Возможно атака с помощью файловой загрузки!' . PHP_EOL;
            header("Location: index.html");
            exit();
        }

        echo '<pre>';
        echo 'Некоторая отладочная информация'; 
        echo '<pre>';
        var_dump($_FILES);
        echo '<pre>';
    } else {
        header("Location: index.html"); 
        exit();
    }
} else {
    header("Location: index.html"); 
    exit();
}
