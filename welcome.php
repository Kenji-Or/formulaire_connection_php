<?php
session_start(); // Démarrer la session
// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['name'])) {
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet">
    </head>
    <body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-4">
            <h2 class="display-5"><?php echo "Bienvenue sur votre session" . " ". $_SESSION['name'] . " " . $_SESSION['surname'] . " " . "votre rôle est " . " " . $_SESSION['role']?></h2>
            <div class="text-center">
                <a class='btn btn-secondary' href='logout.php'>Se déconnecter</a>
            </div>
        </div>
    </div>
    </body>
    </html>
    <?php
} else {
// Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header("Location: index.php");
    exit;
}