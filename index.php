<!DOCTYPE html>
<html>
<head>
    <title>HTML-файл с формой</title>
</head>
<body>

    <form action="/submit" method="post">
        <!--Поле с подписью «с каким именем сохранить файл на сервере» (текстовое поле)-->
        <label for="file_name">Название файла:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <!--Поле с подписью «выберите файл» (поле для загрузки файла)-->
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Выберите файл:</label>
        <input type="file" name="file" id="file">
        <br>

        <!--Кнопка отправки-->
        <button type="submit" value="Загрузить">Загрузить</button>
    </form>
    
</body>
</html>