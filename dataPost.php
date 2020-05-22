<?php
require_once 'db.php';
if (!empty($_POST['full_name'])) {
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $averange_mark = $_POST['averange_mark'];
    $subject = $_POST['subject'];
    $working_day = $_POST['working_day'];


    try {
        $sql = 'INSERT INTO members SET
     full_name = "' . $full_name . '",
     phone = "' . $phone . '",
     email = "' . $email . '",
     role = "' . $role . '",
     averange_mark = "' . $averange_mark . '",
     subject = "' . $subject . '",
     working_day = "' . $working_day . '"';$pdo->exec($sql);
    } catch(Exception $exception){
        echo "Error creating data" . $exception->getCode() . ' ' . $exception->getMessage();
        die();
    }
    header('Location:index.php');

}