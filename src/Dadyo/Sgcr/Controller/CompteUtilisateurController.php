<?php
// Fichier: CompteUtilisateurController.php
// Description: Contrôleur pour gérer les comptes utilisateurs

// Utiliser l'espace de noms approprié pour le contrôleur
namespace Dadyo\Sgcr\Controller;

// Importer les classes du modèle CompteUtilisateur et Auth
use Dadyo\Sgcr\Model\CompteUtilisateur;
use Dadyo\Sgcr\Auth\Auth;
use PDO; // Import the PDO class
use PDOException; // Import the PDOException class

// Classe CompteUtilisateurController pour gérer les comptes utilisateurs
class CompteUtilisateurController
{
    // ...

    // Méthode pour traiter la création d'un nouveau compte utilisateur
    public function traiterCreation()
    {
        // Vérifier si le formulaire a été soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données soumises dans le formulaire
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Effectuer les validations des données soumises
            $errors = array();

            if (empty($username)) {
                $errors[] = "Le nom d'utilisateur est obligatoire.";
            }

            if (empty($password)) {
                $errors[] = "Le mot de passe est obligatoire.";
            }

            // Ajoutez d'autres validations ici en fonction de vos besoins

            // Si des erreurs sont détectées, rediriger l'utilisateur vers le formulaire avec les messages d'erreur
            if (!empty($errors)) {
                // Enregistrer les erreurs dans la session ou dans un cookie pour les afficher dans le formulaire
                // Rediriger vers le formulaire de création de compte avec les erreurs
                header('Location: creationCompteUtilisateur.php?errors=' . urlencode(serialize($errors)));
                exit;
            }

            // Si les validations sont réussies, insérer le nouvel utilisateur dans la base de données

            // Établir une connexion PDO avec la base de données
            $dsn = 'mysql:host=localhost;dbname=sgcr_db';
            $username = 'root';
            $password = '';

            try {
                $pdo = new PDO($dsn, $username, $password);
            } catch (PDOException $e) {
                die('Erreur de connexion à la base de données : ' . $e->getMessage());
            }

            // Hasher le mot de passe pour des raisons de sécurité
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Préparer la requête d'insertion
            $sql = "INSERT INTO utilisateurs (nom_utilisateur, mot_de_passe) VALUES (:username, :password)";
            $stmt = $pdo->prepare($sql);

            // Lier les valeurs aux paramètres
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $hashedPassword);

            // Exécuter la requête
            if ($stmt->execute()) {
                // Insertion réussie
                header('Location: confirmation.php');
                exit;
            } else {
                // Erreur lors de l'insertion
                header('Location: erreur.php');
                exit;
            }
        }
    }
    
    // Méthode pour afficher le formulaire de création d'un nouveau compte utilisateur
    public function afficherFormulaireCreation()
    {
    // Vérifier si l'utilisateur est déjà connecté
    if (Auth::isUserLoggedIn()) {
        // L'utilisateur est déjà connecté, rediriger vers une autre page (par exemple, la page d'accueil)
        header('Location: /');
        exit;
    }
        // Ici, vous pouvez ajouter toute logique spécifique avant d'afficher le formulaire

        // Afficher le formulaire de création d'un nouveau compte utilisateur
        include 'chemin/vers/votre/template/creationCompteUtilisateur.php';
    }

    // Autres méthodes du contrôleur...

}
