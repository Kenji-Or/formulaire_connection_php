<?php
session_start();
include_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $sql->bindValue(":email", $email);
    $sql->execute();
    $user = $sql->fetch();
    if ($user['email'] == $email && $user['password'] == sha1($password)) {
    // Stocker les informations de l'utilisateur dans la session
            $_SESSION['name'] = $user['name'];
            $_SESSION['surname'] = $user['surname'];
            $_SESSION['role'] = $user['role'];
    // Rediriger vers la page d'accueil après connexion réussie
            header("Location: welcome.php");
            exit;
        }  else {
        // Si les informations ne correspondent pas
        echo "Email ou mot de passe incorrect." . " " . "<a href='index.php'>Reconnections</a>";

    }
}


