<?php 
// Les données du cookie sont directement désérialisées
$user_data = unserialize($_COOKIE['user_settings']);
// Si un attaquant injecte un objet malveillant, il peut exécuter du code