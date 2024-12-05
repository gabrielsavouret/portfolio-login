<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variable.php');
require_once(__DIR__ . '/fonctions.php');
require_once(__DIR__ . '/init.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets</title> 
    <link rel="stylesheet" href="CSS/projet.css">
</head>
<body>
<header>
    <!-- Icône hamburger -->
    <div class="menu-icon" id="menu-icon">&#9776;</div>
</header>

    <!-- Menu latéral -->
<nav class="side-nav" id="side-nav">
    <ul class="links">
        <li><a href="home.php"><strong>HOME</strong></a></li>
        <li><a href="Projets.php?id=0"><strong>RH Connect</strong></a></li>
        <li><a href="Projets.php?id=1"><strong>Client Connect</strong></a></li>
        <li><a href="Projets.php?id=2"><strong>TradeHub</strong></a></li>
        <li><a href="Projets.php?id=3"><strong>ProManage</strong></a></li>
        <li><a href="Projets.php?id=4"><strong>Streamit</strong></a></li>
    </ul>
</nav>
    <div class="projet">
        <h1>PRESENTATION DES PROJETS</h1>
        <section class="presentation">
            <img class="image" src="<?= $dataprojet[$id]['image']; ?>" alt="image projet" style="max-width: 40%; height: auto;">
            <h2><?php echo $dataprojet[$id]['name']; ?></h2>
            <br>
            <p><?php echo $dataprojet[$id]['description']; ?></p>
            <br>
        </section>
        <section class="description">
            <section class="description-groupe">
            <h3>Fonctionnalités</h3>
            <ul>
                <li><?php echo $dataprojet[$id]['fonct_1']; ?></li>
                <li><?php echo $dataprojet[$id]['fonct_2']; ?></li>
                <li><?php echo $dataprojet[$id]['fonct_3']; ?></li>
            </ul>
            <br>
            </section>
            <section class="description-groupe">
            <h3>Compétences</h3>
            <ul>
                <li><?php echo $dataprojet[$id]['comp_1']; ?></li>
                <li><?php echo $dataprojet[$id]['comp_2']; ?></li>
            </ul>
            <br>
            </section>
            <section class="description-groupe">
            <h3>Logiciels</h3>
            <ul>
                <li><?php echo $dataprojet[$id]['logiciel_1']; ?></li>
                <li><?php echo $dataprojet[$id]['logiciel_2']; ?></li>
            </ul>
            <br>
            </section>
        </section>
        <br>
    </div>
    <footer>
    <div class="footer-container">
      <div class="contact">
        <h3>Contact</h3>
        <p><strong>Email :</strong> alex.martin@example.com</p>
        <p><strong>Téléphone :</strong> +33 6 xx xx xx xx</p>
      </div>
      <div class="social">
        <h3>Suivez-moi</h3>
        <a href="https://github.com/Cypherpunk-7/PORTFOLIO" target="_blank">GitHub</a>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2024 Alex Martin. Tous droits réservés.</p>
    </div>
    </footer>

    <script src="JS/main.js"></script>
</body>
</html>
