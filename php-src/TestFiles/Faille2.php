<?php 

// En production, ces réglages devraient être à 0
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Une erreur ici affichera le chemin du fichier et la structure de la base de données
$db->query("SELECT * FROM non_existent_table");