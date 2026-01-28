<?php 

$login_success = checkLogin($_POST['u'], $_POST['p']);
if (!$login_success) {
    // On se contente d'afficher l'erreur sans rien enregistrer côté serveur
    echo "Identifiants invalides.";
}