<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашние Задание 5 </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
</head>
<body>
<div>
<h3>Введите текст </h3>
<br>

</div>
</body>
</html><div class="conteiner">
    <form action="dataPost.php" method="POST" >

        <div class="form-group">
            <label>full_name: <input type="text" name="full_name" required></label>
        </div>   <div class="form-group">
            <label>phone: <input type="text" name="phone" required></label>
        </div>
        <div class="form-group">
            <label>email: <input type="text" name="email" required></label>
        </div>
        <div class="form-group">
            <label>role: <input type="text" name="role" required></label>
        </div>
        <div class="form-group">
            <label>averange_mark INT: <input type="text" name="averange_mark"></label>
        </div>
        <div class="form-group">
            <label>subject: <input type="text" name="subject"></label>
        </div>
        <div class="form-group">
            <label>working_day: <input type="text" name="working_day"></label>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </div>
    </form>
</div>