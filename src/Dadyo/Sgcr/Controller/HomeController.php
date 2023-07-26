<?php
// Fichier: HomeController.php
// Description: Contrôleur pour gérer la page d'accueil

// Utiliser l'espace de noms approprié pour le contrôleur
namespace Dadyo\Sgcr\Controller;

// Classe HomeController pour gérer la page d'accueil
class HomeController
{
    // Méthode pour afficher la page d'accueil
    public function afficherAccueil()
    {
        // Ici, vous pouvez ajouter toute logique spécifique liée à la page d'accueil

        // Inclure la vue qui affiche la page d'accueil
        include 'src/Dadyo/Sgcr/View/index.php';
    }
}
