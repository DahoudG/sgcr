<?php
// src/Dadyo/Sgcr/Model/CompteRendu.php

namespace Dadyo\Sgcr\Model;

class CompteRendu
{
    private $id;
    private $titre;
    private $contenu;
    private $date;

    // Constructeur pour créer un nouvel objet CompteRendu avec les informations du compte-rendu
    public function __construct($titre, $contenu, $date)
    {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->date = $date;
    }

    // Méthode pour obtenir l'ID du compte-rendu
    public function getId()
    {
        return $this->id;
    }

    // Méthode pour définir l'ID du compte-rendu
    public function setId($id)
    {
        $this->id = $id;
    }

    // Méthode pour obtenir le titre du compte-rendu
    public function getTitre()
    {
        return $this->titre;
    }

    // Méthode pour définir le titre du compte-rendu
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    // Méthode pour obtenir le contenu du compte-rendu
    public function getContenu()
    {
        return $this->contenu;
    }

    // Méthode pour définir le contenu du compte-rendu
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    // Méthode pour obtenir la date du compte-rendu
    public function getDate()
    {
        return $this->date;
    }

    // Méthode pour définir la date du compte-rendu
    public function setDate($date)
    {
        $this->date = $date;
    }
}
