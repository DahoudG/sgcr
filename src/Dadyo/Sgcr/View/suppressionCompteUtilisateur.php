<?php
// Inclusion de l'en-tête
include 'src/Dadyo/Sgcr/View/header.php';

// Vérifier si l'utilisateur est connecté en tant qu'administrateur
// Vous pouvez utiliser la fonction isUserLoggedIn() définie dans auth.php pour vérifier l'authentification de l'administrateur

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ici, vous pouvez gérer le processus de suppression d'un compte utilisateur
    // Par exemple, supprimer les informations d'identification de la base de données
    // Vous pouvez également effectuer des validations, etc.

    // Rediriger vers une page de confirmation après la suppression du compte utilisateur
    header('Location: confirmation.php');
    exit;
}
?>

<main>
    <h2>Compte Administrateur - Suppression d'un compte utilisateur</h2>
    <!-- Formulaire pour supprimer un compte utilisateur -->
    <form action="suppressionCompteUtilisateur.php" method="post">
        <!-- Insérez ici les champs pour spécifier le compte utilisateur à supprimer (par exemple, le nom d'utilisateur ou l'ID) -->
        <button type="submit">Supprimer le compte utilisateur</button>
    </form>
</main>

<?php
// Inclusion du pied de page
include 'src/Dadyo/Sgcr/View/footer.php';
?>
