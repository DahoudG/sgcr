<?php
// Fichier: CompteRenduController.php
// Description: Contrôleur pour gérer les comptes-rendus

// Utiliser l'espace de noms approprié pour le contrôleur
namespace Dadyo\Sgcr\Controller;

// Importer la classe du modèle CompteRendu
use Dadyo\Sgcr\Model\CompteRendu;

// Classe CompteRenduController pour gérer les comptes-rendus
class CompteRenduController
{
    // Méthode pour récupérer les comptes-rendus disponibles
    public function getCompteRendus()
    {
        // Exemple : Récupérer les comptes-rendus depuis une source de données (base de données, API, etc.)
        // Ici, nous retournons simplement un tableau statique à titre d'exemple
        return [
            new CompteRendu(1, 'Compte-Rendu 1', 'Contenu du compte-rendu 1', '2023-07-01'),
            new CompteRendu(2, 'Compte-Rendu 2', 'Contenu du compte-rendu 2', '2023-07-05'),
            new CompteRendu(3, 'Compte-Rendu 3', 'Contenu du compte-rendu 3', '2023-07-10'),
        ];
    }
}
