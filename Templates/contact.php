<?php
/**
 * Page contact
 * traitement du formulaire de contact et envoie de l'email avec mailtrap
 */
$firstname = htmlspecialchars( $_POST['firstname'] ?? '');
$lastname = htmlspecialchars( $_POST['lastname'] ?? '');
?>

<h1 class="bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold text-transparent text-center">
    Me Contacter
</h1>
<div class="grid place-items-center">
<?php include 'templates/components/form.php'; ?>
    </div>
