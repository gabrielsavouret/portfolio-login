<?php
session_start(); // Démarre la session existante
session_unset(); // Vide toutes les variables de session
session_destroy(); // Détruit la session
header('Location: index.php'); // Redirige vers la page de connexion
exit; // Arrête l'exécution du script
?>
