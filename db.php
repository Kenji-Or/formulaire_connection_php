<?php
$db_name="formulaire_php";
$db_host="localhost";
$db_user="root";
$db_pass="";
$charset = 'utf8mb4';
$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$charset";
try {
    $pdo = new PDO($dsn, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur de connexion a la bd : ' . $e->getMessage());
}
