<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGCR - Accueil</title>
    <!-- Intégration des fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="/www/SGCR/public/bootstrap/css/bootstrap.min.css">
    <!-- Intégrationes fichiers CSS personnalisés de votre projet -->
    <link rel="stylesheet" href="/www/SGCR/public/css/styles.css">
</head>
<body>
    <!-- En-tête commun à toutes les pages -->
    <header>
        <h1>SGCR</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/compte-rendu">Comptes-Rendus</a></li>
                    <li><a href="/a-propos">À Propos</a></li>
                    <li><a href="/www/SGCR/src/Dadyo/Sgcr/View/creationCompteUtilisateur.php">Se connecter</a></li>
                    <!-- Ajouter d'autres liens de navigation si nécessaire -->
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <h2>Bienvenue sur notre projet SGCR</h2>
        <p>Vous pouvez explorer notre site et accéder aux différentes fonctionnalités.</p>
        <!-- Ajouter du contenu spécifique à la page d'accueil si nécessaire -->
        <button class="btn btn-primary">Cliquez ici</button>
    </main>

    <!-- Pied de page commun à toutes les pages -->
    <footer>
        <p>Contactez-nous : contact@monprojetsgcr.com</p>
        <p>&copy; <?php echo date('Y'); ?> Mon Projet SGCR. Tous droits réservés.</p>
    </footer>
    <!-- Intégration des fichiers JS de Bootstrap -->
    <script src="/www/SGCR/public/bootstrap/js/bootstrap.min.js"></script>
    <!-- Intégration des fichiers JS personnalisés de votre projet -->
    <script src="/www/SGCR/public/js/script.js"></script>
</body>
</html>

<?php
// Chargement des dépendances et initialisation de la session si nécessaire
// Note: Vous devez inclure ici les fichiers d'autoloading, les configurations, et initialiser la session si nécessaire.

// Fonction de routage pour rediriger les requêtes vers les contrôleurs appropriés
function routeRequest($uri) {
    switch ($uri) {
        case '/':
            require 'src/Dadyo/Sgcr/Controller/HomeController.php';
            $homeController = new \Dadyo\Sgcr\Controller\HomeController();
            $homeController->afficherAccueil();
            break;
        case '/compte-rendu':
            require 'src/Dadyo/Sgcr/Controller/CompteRenduController.php';
            $compteRenduController = new \Dadyo\Sgcr\Controller\CompteRenduController();
            // Appeler les méthodes du contrôleur pour gérer les comptes-rendus
            // ...
            break;
        case '/a-propos':
            require 'src/Dadyo/Sgcr/View/aPropos.php';
            break;
        case '/src/Dadyo/Sgcr/View/creationCompteUtilisateur.php':
            require 'src/Dadyo/Sgcr/Controller/CompteUtilisateurController.php';
            $compteUtilisateurController = new \Dadyo\Sgcr\Controller\CompteUtilisateurController();
            $compteUtilisateurController->afficherFormulaireCreation();
            break;
        case '/confirmation.php':
            require 'src/Dadyo/Sgcr/View/confirmation.php';
            break;
        case '/erreur.php':
            require 'src/Dadyo/Sgcr/View/erreur.php';
            break;
        default:
            // Gérer les pages 404 pour les URL invalides
            header("HTTP/1.0 404 Not Found");
            echo 'Page not found';
            exit;
    }
}

// Récupérer l'URI demandée
$uri = $_SERVER['REQUEST_URI'];

// Supprimer les éventuels paramètres de l'URI (par exemple, "?id=123")
$uri = strtok($uri, '?');

// Appeler la fonction de routage pour traiter la requête
routeRequest($uri);
?>

