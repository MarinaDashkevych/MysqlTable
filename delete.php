<?php
if (empty($_GET['id'])){
    header('Location:index.php');
}
require_once 'db.php';
$id = $_GET['id'];
try {
    $sql = "DELETE FROM members WHERE id=".$id;
    $pdo->exec($sql);
}catch (Exception $exception){
    echo 'Error delete!' / $exception->getCode() . ' massege; ' . $exception->getMessage();
    die();
}
header('Location:index.php');
