<?php
// Inclure le fichier header.php qui contient l'en-tête commun à toutes les pages
include 'src/Dadyo/Sgcr/View/header.php';

// Inclure les fichiers des classes et des contrôleurs nécessaires
require 'src/Dadyo/Sgcr/Model/CompteRendu.php';
require 'src/Dadyo/Sgcr/Controller/CompteRenduController.php';

// Instancier le contrôleur des comptes-rendus
$compteRenduController = new Dadyo\Sgcr\Controller\CompteRenduController();

// Contenu spécifique de la page d'accueil
echo '<main>';
echo '<h2>Bienvenue sur Mon Projet SGCR</h2>';
echo '<p>Ceci est la page d\'accueil de notre projet de Conception et Réalisation d\'un Outil de Saisie et de Gestion de Compte-Rendu (SGCR).</p>';

// Récupérer les comptes-rendus disponibles depuis le contrôleur
$compteRendus = $compteRenduController->getCompteRendus();

// Afficher les comptes-rendus sous forme de liens
if (!empty($compteRendus)) {
    echo '<p>Vous pouvez commencer en consultant les comptes-rendus disponibles :</p>';
    echo '<ul>';
    foreach ($compteRendus as $compteRendu) {
        echo '<li><a href="/compte-rendu/' . $compteRendu->getId() . '">' . $compteRendu->getTitre() . '</a></li>';
    }
    echo '</ul>';
} else {
    echo '<p>Aucun compte-rendu disponible pour le moment.</p>';
}

// Afficher le lien pour créer un nouveau compte-rendu
echo '<a href="/compte-rendu/creer" class="button">Créer un nouveau compte-rendu</a>';

echo '</main>';

// Inclure le fichier footer.php qui contient le pied de page commun à toutes les pages
include 'src/Dadyo/Sgcr/View/footer.php';
?>
