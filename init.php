<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirige l'utilisateur vers la page de connexion
    header('Location: index.php');
    exit;
}
