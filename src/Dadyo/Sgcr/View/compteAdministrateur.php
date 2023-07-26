<?php
// Inclusion de l'en-tête
include 'src/Dadyo/Sgcr/View/header.php';

// Vérifier si l'utilisateur est connecté en tant qu'administrateur
// Vous pouvez utiliser la fonction isUserLoggedIn() définie dans auth.php pour vérifier l'authentification de l'administrateur

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ici, vous pouvez gérer le processus de donner des rôles à chaque nouvel inscrit
    // Par exemple, enregistrer les rôles dans la base de données en fonction des informations soumises par l'administrateur
    // Vous pouvez également effectuer des validations, etc.

    // Rediriger vers une page de confirmation après avoir donné les rôles
    header('Location: confirmation.php');
    exit;
}
?>

<main>
    <h2>Compte Administrateur - Gestion des rôles</h2>
    <!-- Formulaire pour donner des rôles -->
    <form action="compteAdministrateur.php" method="post">
        <!-- Insérez ici les champs pour spécifier les rôles pour chaque nouvel inscrit -->
        <!-- Par exemple, vous pouvez utiliser des cases à cocher ou des menus déroulants pour sélectionner les rôles -->
        <button type="submit">Donner les rôles</button>
    </form>
</main>

<?php
// Inclusion du pied de page
include 'src/Dadyo/Sgcr/View/footer.php';
?>
