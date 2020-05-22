<?php
if (empty($_GET['id'])){
    header('Location:index.php');
}
require_once 'db.php';
$id = $_GET['id'];
try {
    $sql = "SELECT * FROM members WHERE id=".$id;
    $pdoResult = $pdo->query($sql);
    $membersArr = $pdoResult->fetchAll();
    $member = $membersArr[0];

}catch (Exception $exception) {
    echo 'Error edit data!' / $exception->getCode() . ' massege; ' . $exception->getMessage();
    die();
}
/*
$membersObj = [];
foreach ($membersArr as $key => $member) {
    switch ($member['role']) {
        case "student":
            $membersObj[] = new Student($member['id'], $member['full_name'], $member['phone'],
                $member['email'], $member['role'], $member['averange_mark']);
            break;

        case "teacher":
            $membersObj[] = new Teacher($member['id'], $member['full_name'], $member['phone'],
                $member['email'], $member['role'], $member['subject']);
            break;

        case "admin":
            $membersObj[] = new Admin($member['id'], $member['full_name'], $member['phone'],
                $member['email'], $member['role'], $member['working_day']);
            break;
    }
}

$id = $_GET['id'];

try {
    $sql = 'SELECT full_name, phone, email, role, averange_mark, subject, working_day FROM members WHERE id='.$id;
    $pdoResult = $pdo->query($sql);
    $membersArr = $pdoResult->fetchAll();
}catch (Exception $exception){
echo 'Error edit data!' / $exception->getCode() . ' massege; ' . $exception->getMessage();
die();
}

*/
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
    <h3>Введите изменения</h3>
    <br>

</div>

<div class="conteiner">
    <form action="update.php" method="POST" >
        <input type="hidden" name="id" value="<?=$member['id']?>"

         <div class="form-group">
            <label>Full_name<input type="text" name="full_name" value="<?=$member['full_name']?>" required></label>
        </div>   <div class="form-group">

            <label>phone: <input type="text" name="phone" value="<?=$member['phone']?>" required></label>
        </div>
        <div class="form-group">
            <label>email: <input type="text" name="email" value="<?=$member['email']?>" required></label>
        </div>
        <div class="form-group">
            <label>role: <input type="text" name="role" value="<?=$member['role']?>"></label>
        </div>
        <div class="form-group">
            <label>averange_mark INT: <input type="text" name="averange_mark" value="<?=$member['averange_mark']?>"></label>
        </div>
        <div class="form-group">
            <label>subject: <input type="text" name="subject" value="<?=$member['subject']?>"></label>
        </div>
        <div class="form-group">
            <label>working_day: <input type="text" name="working_day" value="<?=$member['working_day']?>"></label>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </div>
    </form>
</div>
</body>
</html>