<?php 
// Le script traite la demande de mot de passe oublié sans aucune restriction de fréquence
if (isset($_POST['email'])) {
    sendResetLink($_POST['email']);
    echo "Lien envoyé !";
}