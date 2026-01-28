<?php 
$user = $_POST['username'];
// Si l'utilisateur saisit : admin' --
$sql = "SELECT * FROM users WHERE username = '$user'";
$result = $conn->query($sql);