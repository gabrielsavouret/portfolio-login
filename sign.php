<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variable.php');
require_once(__DIR__ . '/fonctions.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $login = htmlspecialchars($_POST['login']);
    $raw_password = $_POST['password'];

    if (!empty($prenom) && !empty($nom) && !empty($login) && !empty($raw_password)) {

        $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO Users (Prenom, Nom, Login, Password) VALUES (:prenom, :nom, :login, :password)";
        $stmt = $pdo->prepare($sql);

        try {
            $stmt->execute([
                ':prenom' => $prenom,
                ':nom' => $nom,
                ':login' => $login,
                ':password' => $hashed_password
            ]);
            echo "<p style='color: green;'>Utilisateur ajouté avec succès !</p>";
        } catch (PDOException $e) {
            echo "<p style='color: red;'>Erreur lors de l'insertion : " . $e->getMessage() . "</p>";
        }
    } else {
        echo "<p style='color: red;'>Tous les champs sont obligatoires.</p>";
    }
}

?>
<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="CSS/form.css"/>
    <title>Signin</title>
</head>
<body>
    <form action="" method="POST">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : ''; ?>">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : ''; ?>">
        <label for="login">Login :</label>
        <input type="text" id="login" name="login" value="<?php echo isset($_POST['login']) ? htmlspecialchars($_POST['login']) : ''; ?>">
        <label for="password">mot de passe :</label>
        <input type="password" id="password" name="password">
        <button type="submit">Créer un compte</button>
        <a href="index.php" class="button">Se connecter</a>
    </form>
</body>
</html>
