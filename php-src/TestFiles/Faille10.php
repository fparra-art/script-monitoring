<?php 

try {
    check_firewall_status(); // Si cette fonction plante/timeout
    $is_admin = verify_token($_GET['token']);
} catch (Exception $e) {
    // Erreur critique : au lieu de bloquer, on laisse passer pour "ne pas casser l'expérience"
    $is_admin = true; 
}