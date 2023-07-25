<?php
// src/Dadyo/Sgcr/Model/CompteRendu.php

namespace Dadyo\Sgcr\Model;

class CompteRendu
{
    private $id;
    private $titre;

    public function __construct($id, $titre)
    {
        $this->id = $id;
        $this->titre = $titre;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }
}
