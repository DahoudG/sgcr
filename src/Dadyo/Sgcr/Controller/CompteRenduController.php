<?php
// src/Dadyo/Sgcr/Controller/CompteRenduController.php

namespace Dadyo\Sgcr\Controller;

use Dadyo\Sgcr\Model\CompteRendu;

class CompteRenduController
{
    // Méthode pour récupérer les comptes-rendus disponibles
    public function getCompteRendus()
    {
        // Exemple : Récupérer les comptes-rendus depuis une source de données (base de données, API, etc.)
        // Ici, nous retournons simplement un tableau statique à titre d'exemple
        return [
            new CompteRendu(1, 'Compte-Rendu 1'),
            new CompteRendu(2, 'Compte-Rendu 2'),
            new CompteRendu(3, 'Compte-Rendu 3'),
        ];
    }
}
