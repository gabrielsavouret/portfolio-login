<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variable.php');
require_once(__DIR__ . '/fonctions.php');

session_start(); // Démarre la session
session_regenerate_id(true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = htmlspecialchars($_POST['login']);
    $raw_password = $_POST['password'];

    if (!empty($login) && !empty($raw_password)) {
        // Requête pour obtenir l'utilisateur par son login
        $sql = "SELECT * FROM Users WHERE Login = :login";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':login' => $login]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($raw_password, $user['Password'])) {
            // Connexion réussie, démarrer la session et rediriger
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['prenom'] = $user['Prenom'];
            $_SESSION['nom'] = $user['Nom'];
            header('Location: home.php'); // Page d'accueil ou tableau de bord après connexion
            exit;
        } else {
            echo "<p style='color: red;'>Identifiants incorrects.</p>";
        }
    } else {
        echo "<p style='color: red;'>Tous les champs sont obligatoires.</p>";
    }
}



?>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const API_URL = "https://haveibeenpwned.com/api/v3/latestbreach";

    async function fetchBreachData() {
        try {
            const response = await fetch(API_URL, {
                method: "GET",
                headers: {
                    "User-Agent": "VotreApp/1.0", // Requis par certaines API
                }
            });

            if (!response.ok) {
                throw new Error(`Erreur : ${response.status}`);
            }

            const breach = await response.json();
            displayBreachData(breach);
        } catch (error) {
            console.error("Erreur lors de la récupération des données :", error);
            document.getElementById("breach-info").innerText = "Impossible de charger les données.";
        }
    }

    function displayBreachData(breach) {
        const breachInfo = document.getElementById("breach-info");
        breachInfo.innerHTML = `
            <div class="breach">
                <img src="${breach.LogoPath}" alt="${breach.Name}" style="max-width: 100px; margin-bottom: 10px;">
                <strong>${breach.Title}</strong> (Date : ${breach.BreachDate})<br>
                <p>${breach.Description}</p>
                <p>Domaine : ${breach.Domain}</p>
                <p><strong>Impact :</strong> ${breach.PwnCount.toLocaleString()} utilisateurs affectés</p>
                <p><strong>Catégories de données exposées :</strong> ${breach.DataClasses.join(", ")}</p>
            </div>
        `;
    }

    fetchBreachData();
});

</script>

<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="CSS/form.css"/>
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <label for="login">Login :</label>
        <input type="text" id="login" name="login" value="<?php echo isset($_POST['login']) ? htmlspecialchars($_POST['login']) : ''; ?>">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password">
        <button type="submit">Se connecter</button>
        <a href="sign.php" class="button">Créer un compte</a>
    </form>
    
    <h1>Informations sur la dernière fuite de données: </h1>
    <div id="breach-info">Chargement des données...</div>

</body>
</html>
