<?php
require_once('includes\config.php');
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != "etudiant") {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Étudiant</title>
    <link rel="stylesheet" href="style\etudiant.css">
</head>
<body>
    <header>
        <h1>Bienvenue sur le Tableau de Bord Étudiant</h1>
    </header>

    <nav>
        <ul>
            <li><a href="tableau_etudiant.php">Accueil</a></li>
            <li><a href="rechercher_telecharger.php">Mémoires</a></li>
            <li><a href="login.php">Déconnexion</a></li>
        </ul>
    </nav>

    <section class="content">
        <p>Bienvenue dans votre tableau de bord étudiant ! Nous sommes ravis de vous accueillir dans cet espace dédié au memoires. Que vous soyez un nouvel étudiant ou un vétéran de l'éducation, ce tableau de bord a été conçu pour vous aider à naviguer avec succès à travers les pages acquerir des connaissances a travers des memoirs, des themes..</p>
        <p>Pour rechercher et télécharger des mémoires, veuillez cliquer sur le lien si dessous.</p>
        <p><a href="rechercher_telecharger.php">rechercher et télécharger des mémoires</a></p>
    </section>

    <footer>
        <p>© 2024 Gestion des Mémoires IAM</p>
    </footer>
</body>
</html>