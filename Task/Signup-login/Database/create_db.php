<?php

$dsn = 'mysql:host=localhost';
$user = 'root';
$password = '';
$dbname = 'myDB';

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $pdo->exec($sql);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
