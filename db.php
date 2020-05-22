<?php
$host = 'localhost';
$dbUser = 'Marina';
$dbPassword = 'Dzhina';
$dbName = 'members';

try{
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, $dbUser, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}catch(Exception $exception){
    die('Wasn\`t able to connect to db!');
}

