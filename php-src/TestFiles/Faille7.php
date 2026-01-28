<?php 
// Mauvaise pratique : Passer l'ID de session dans l'URL (Session Fixation)
// monsite.com/dashboard.php?PHPSESSID=12345
session_start();