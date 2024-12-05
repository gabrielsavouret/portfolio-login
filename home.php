<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variable.php');
require_once(__DIR__ . '/fonctions.php');
require_once(__DIR__ . '/init.php');

?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <title>Portfolio</title>
        <link rel="stylesheet" href="CSS/main.css"/>
    </head>
    <body>
        <header>
            <!-- Icône hamburger -->
            <div class="menu-icon" id="menu-icon">&#9776;</div>
			<div>
			<form action="logout.php" method="POST">
			<p>Bonjour <?php echo $_SESSION['prenom'] ?> <?php echo $_SESSION['nom'] ?></p> 
			<button type="submit">Se deconnecter</button>
			</form>
			</div>
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
		
        <div class="presentation">
        	<h1 class="titre">DEVELOPPEUR FULLSTACK</h1>
        	<img class="Alex" src="images/Alex Martin.png" alt="Alex Martin">

        	<section class="cv">

            	<h2>PRESENTATION</h2>
			    <p>Développeur full-stack passionné avec plus de 10 ans d'expérience dans la conception et le développement d'applications web et mobiles performantes.</p>
                <br>
                <br>

            	<h3>COMPETENCES TECHNIQUES:</h3>
            	<section class="competences">
                
                	<div class="competence-group">
				    	<h4>Langages de programmation:</h4>
				    	<ul>
					    	<li>Python (avancé)</li>
							<li>JavaScript (React.js, Node.js)</li>
							<li>SQL (PostgreSQL, MySQL)</li>
							<li>HTML5 / CSS3 / SASS</li>
						</ul>
                	</div>
                
                	<div class="competence-group">
				    	<h4>Frameworks et Bibliothèques:</h4>
					    <ul>
						    <li>Django, Flask</li>
						    <li>React.js, Vue.js</li>
						    <li>Bootstrap, Tailwind CSS</li>
                        </ul>
                	</div>
                
                	<div class="competence-group">
						<h4>Base de données et de stockage:</h4>
					    <ul>
						    <li>PostgreSQL, MongoDB</li>
						    <li>Elasticsearch</li>
					 	</ul>
                	</div>
                
                	<div class="competence-group">
						<h4>Outils et plateforme:</h4>
					    	<ul>
						    	<li>Docker, Kubernetes</li>
						    	<li>Git, GitHub, GitLab</li>
						    	<li>Tableau, Power BI</li>
					    	</ul>
                	</div>
                
                	<div class="competence-group">
				    	<h4>Domaines d'expertise :</h4>
					    	<ul>
						    	<li>Développement d'applications web et mobiles</li>
						    	<li>Analyse de données et visualisation</li>
						    	<li>Sécurité applicative et gestion des logs</li>
						    	<li>Intégration d’API tierces (Stripe, PayPal, Google Calendar)</li>
					    	</ul>
                	</div>
        		</section>
            
       		</section>
		</div>
		

        <div class="articles">
        <div class="titre-posts"><h3>PROJETS</h3></div>
        <div class="posts">
			<article>
				<h2><a href="Projets.php?id=0">RH Connect</a></h2>
				<a href="Projets.php?id=0" class="image fit">
                    <img src="images/RH_connect.webp"/>
                </a>
				<p>Application utilisée par les entreprises pour gérer leurs employés.</p>
				<ul class="actions special">
					<li><a href="Projets.php?id=0" class="button">Le Projet</a></li>
				</ul>
			</article>

			<article>
				<h2><a href="Projets.php?id=1">Client Connect</a></h2>
			    <a href="Projets.php?id=1" class="image fit">
                    <img src="images/clientconnect.jpg"/>
                </a>
				<p>Outil pour aider les entreprises à organiser et suivre leurs relations avec les clients et prospects.</p>
				<ul class="actions special">
					<li><a href="Projets.php?id=1" class="button">Le Projet </a></li>
				</ul>
			</article>

			<article>
				<h2><a href="Projets.php?id=2">TradeHub</a></h2>
				<a href="Projets.php?id=2" class="image fit"><img src="images/Tradeup.webp" alt="" /></a>
				<p>Plateforme qui permet à des entreprises d’acheter et vendre en ligne des produits en gros.</p>
				<ul class="actions special">
					<li><a href="Projets.php?id=2" class="button">Le Projet</a></li>
				</ul>
			</article>

			<article>
				<h2><a href="Projets.php?id=3">ProManage</a></h2>
				<a href="Projets.php?id=3" class="image fit"><img src="images/promanage.webp" alt="" /></a>
				<p>Alternative à des outils comme Trello ou Jira</p>
				<ul class="actions special">
					<li><a href="Projets.php?id=3" class="button">Le Projet</a></li>
				</ul>
			</article>

			<article>
				<h2><a href="Projets.php?id=4"> StreamIt</a></h2>
				<a href="Projets.php?id=4" class="image fit"><img src="images/streamit.webp" alt="" /></a>
				<p>Service permettant de diffuser des vidéos en direct ou à la demande.</p>
				<ul class="actions special">
					<li><a href="Projets.php?id=4" class="button">Le Projet</a></li>
				</ul>
			</article>

        </div>
        </div>
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
