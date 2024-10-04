<?php
session_start(); // Démarrer la session
// Si l'utilisateur est déjà connecté, on affiche un message de bienvenue et un lien de déconnexion
if (isset($_SESSION['name'])) {
    echo "Bonjour, " . $_SESSION['name'] . " " . $_SESSION['surname'] . "! <a href='logout.php'>Se
déconnecter</a>";
} else {
// Sinon, on affiche le formulaire de connexion
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
        <h3 class="text-center">Connexion</h3>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>
    </div>
</div>
</body>
</html>
<?php
}

