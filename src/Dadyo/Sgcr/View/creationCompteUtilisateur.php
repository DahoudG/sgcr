<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGCR - Création de Compte Utilisateur</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
    <!-- En-tête commun à toutes les pages -->
    <header>
        <h1>SGCR</h1>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/compte-rendu">Comptes-Rendus</a></li>
                <li><a href="/a-propos">À Propos</a></li>
                <li><a href="/www/SGCR/src/Dadyo/Sgcr/View/creationCompteUtilisateur.php">Se connecter</a></li>
                <!-- Ajouter d'autres liens de navigation si nécessaire -->
            </ul>
        </nav>
    </header>

    <main>
        <h2>Création d'un nouveau compte utilisateur</h2>
        <?php
        // Afficher les messages d'erreur s'il y en a
        if (isset($_GET['errors'])) {
            $errors = unserialize(urldecode($_GET['errors']));
            foreach ($errors as $error) {
                echo "<p class=\"error\">$error</p>";
            }
        }
        ?>
        <!-- Formulaire pour créer un nouveau compte utilisateur -->
        <form action="creationCompteUtilisateur.php" method="post">
            <!-- Insérez ici les champs pour saisir les informations d'identification du nouvel inscrit -->
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Créer le compte utilisateur</button>
        </form>
    </main>

    <!-- Pied de page commun à toutes les pages -->
    <footer>
        <p>Contactez-nous : contact@monprojetsgcr.com</p>
        <p>&copy; <?php echo date('Y'); ?> Mon Projet SGCR. Tous droits réservés.</p>
    </footer>
</body>
</html>
