<?php 

$password = $_POST['password'];
// MD5 n'est plus sécurisé pour les mots de passe depuis longtemps
$hashed_password = md5($password);