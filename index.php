<?php
require_once 'db.php';
require_once 'classes/Person.php';
require_once 'classes/Student.php';
require_once 'classes/Teacher.php';
require_once 'classes/Admin.php';

try {
    $sql = 'SELECT id, full_name, phone, email, role, averange_mark, subject, working_day FROM members';
    $pdoResult = $pdo->query($sql);
    $membersArr = $pdoResult->fetchAll();
} catch (Exception $exception) {
}

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
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашние Задание 5 </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">

    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="create_db.php"><h4> Создать таблицу</h4></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="seeder_db.php"><h4>Заполнить таблицу </h4></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</head>
<body>
<br>
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">All member</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        <?php foreach ($membersObj as $key => $member):?>
            <tr>
                <td><?=$member->getId()?></td>
                <td><?=$member->getVisitCard()?></td>
                <td><a class="btn btn-primary" href="edit.php?id=<?=$member->getId()?>">Edit</a></td>
                <td><a class="btn btn-primary" href="delete.php?id=<?=$member->getId()?>">Delete</a></td>
            </tr>
        <?php endforeach;?>


        </thead>
        <tbody>
        </tbody>
    </table>
</div>




</body>
</html>