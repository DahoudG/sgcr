<?php
// Fichier: CompteUtilisateur.php
// Description: Modèle pour représenter un compte utilisateur

// Classe CompteUtilisateur pour représenter un compte utilisateur
class CompteUtilisateur
{
    private $id;
    private $username;
    private $password;

    // Constructeur pour créer un nouvel objet CompteUtilisateur avec les informations d'identification
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    // Méthode pour obtenir l'ID du compte utilisateur
    public function getId()
    {
        return $this->id;
    }

    // Méthode pour définir l'ID du compte utilisateur
    public function setId($id)
    {
        $this->id = $id;
    }

    // Méthode pour obtenir le nom d'utilisateur du compte utilisateur
    public function getUsername()
    {
        return $this->username;
    }

    // Méthode pour définir le nom d'utilisateur du compte utilisateur
    public function setUsername($username)
    {
        $this->username = $username;
    }

    // Méthode pour obtenir le mot de passe du compte utilisateur
    public function getPassword()
    {
        return $this->password;
    }

    // Méthode pour définir le mot de passe du compte utilisateur
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
