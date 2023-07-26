<?php
// Inclusion de l'en-tête
include 'src/Dadyo/Sgcr/View/header.php';

// Vérifier si l'utilisateur est connecté en tant qu'administrateur
// Vous pouvez utiliser la fonction isUserLoggedIn() définie dans auth.php pour vérifier l'authentification de l'administrateur

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ici, vous pouvez gérer le processus de modification du compte utilisateur
    // Par exemple, mettre à jour les informations d'identification dans la base de données
    // Vous pouvez également effectuer des validations, etc.

    // Rediriger vers une page de confirmation après la modification du compte utilisateur
    header('Location: confirmation.php');
    exit;
}
?>

<main>
    <h2>Compte Administrateur - Modification d'un compte utilisateur</h2>
    <!-- Formulaire pour modifier un compte utilisateur -->
    <form action="modificationCompteUtilisateur.php" method="post">
        <!-- Insérez ici les champs pour spécifier le compte utilisateur à modifier (par exemple, le nom d'utilisateur ou l'ID) -->
        <!-- Vous pouvez également inclure des champs pour saisir les nouvelles informations d'identification -->
        <button type="submit">Modifier le compte utilisateur</button>
    </form>
</main>

<?php
// Inclusion du pied de page
include 'src/Dadyo/Sgcr/View/footer.php';
?>
