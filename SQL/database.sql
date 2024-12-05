CREATE DATABASE dataproject; 
-- DROP TABLE projets;
USE dataproject;
CREATE TABLE projets( 
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    description VARCHAR(1500) NOT NULL,
    image VARCHAR(50) NOT NULL,
    fonct_1 VARCHAR(200) NOT NULL,
    fonct_2 VARCHAR(200) NOT NULL,
    fonct_3 VARCHAR(200) NOT NULL,
    comp_1 VARCHAR(200) NOT NULL,
    comp_2 VARCHAR(200) NOT NULL,
    logiciel_1 VARCHAR(200) NOT NULL,
    logiciel_2 VARCHAR(200) NOT NULL
); 

INSERT INTO projets( name, description, image, fonct_1, fonct_2,fonct_3, comp_1, comp_2, logiciel_1, logiciel_2) 
VALUES
('RH Connect','RH Connect est une application intuitive et facile à utiliser conçue pour simplifier la gestion des ressources humaines au sein des entreprises. Elle permet aux départements RH de gérer efficacement les informations relatives aux employés, de suivre les performances, de faciliter la gestion des absences et des congés, et d’améliorer la communication interne. RH Connect offre une solution centralisée et automatisée, idéale pour les entreprises de toutes tailles, cherchant à optimiser leur gestion des talents.', 'images/RH_connect.webp', 'Gestion des informations employées.', 'Suivi des congés et absences.', 'Outils de communication interne.', 'Connaissances en bases de données relationnelles.', 'Développement front-end.', 'MySQL pour la base de données.', 'Bootstrap pour l’interface utilisateur.'),
('Client Connect','ClientConnect est une application full-stack conçue pour aider les entreprises à gérer efficacement leurs relations clients. Elle permet de centraliser les données des clients, de suivre les opportunités commerciales et d’automatiser les tâches liées aux interactions avec les clients.', 'images/clientconnect.jpg', 'Gestion des fiches clients.', 'Automatisation des campagnes marketing.', 'Analyses détaillées des performances.', 'Expérience en CRM (Customer Relationship Management).', 'Développement back-end.', 'Salesforce ou HubSpot pour les intégrations.', 'Python ou PHP pour le développement.'),
('Trade Hub','TradeHub est une plateforme dédiée aux transactions de commerce électronique B2B (Business-to-Business), offrant un espace sécurisé et intuitif pour l’achat et la vente de produits en gros entre entreprises. Cette solution simplifie le processus d’approvisionnement, de vente et de gestion des stocks pour les entreprises de toutes tailles, en connectant directement les fournisseurs et les détaillants. Grâce à ses fonctionnalités avancées, TradeHub facilite les transactions à grande échelle et permet aux entreprises de négocier des prix compétitifs et d’optimiser leurs chaînes d’approvisionnement.','images/Tradeup.webp', 'Gestion des catalogues et commandes.', 'Suivi des paiements et expéditions.', 'Analyse des ventes et gestion des partenaires.', 'Connaissances en commerce électronique.', 'Expérience en intégration API logistique.', 'WooCommerce ou Shopify Plus pour le e-commerce.', 'Outils d’intégration avec des transporteurs comme DHL.'),
('ProManage','ProManage est une application collaborative conçue pour simplifier et optimiser la gestion des projets d’équipe. En tant qu’alternative performante à des plateformes comme Trello ou Jira, ProManage offre des fonctionnalités flexibles et intuitives pour planifier, suivre, et accomplir les tâches de manière efficace. Idéal pour les entreprises de toutes tailles, ProManage favorise la transparence, la collaboration et l’organisation dans la réalisation des projets. ','images/promanage.webp', 'Suivi des tâches et deadlines.', 'Gestion des priorités et répartition des responsabilités.', 'Intégration avec des outils comme Slack ou Teams.', 'Développement d’API RESTful.', 'Connaissance en méthodologie Agile.', 'Node.js pour le back-end.', 'MongoDB pour le stockage des données.'),
('StreamIt ','Streamit est une plateforme innovante de streaming vidéo, conçue pour offrir une expérience de visionnage fluide, interactive et immersive. Elle permet aux utilisateurs de diffuser, regarder et partager des vidéos en direct ou à la demande, avec une qualité de streaming optimisée pour différents types de contenus (divertissement, éducation, événements professionnels, etc.). Adaptée à une audience large, cette solution est idéale pour les créateurs de contenu, les entreprises et les institutions souhaitant engager leur communauté de manière moderne et dynamique.','images/streamit.webp', 'Diffusion en direct haute qualité.', 'Gestion des playlists et des contenus à la demande.', 'Système de recommandation basé sur l’historique de visionnage', 'Maîtrise des protocoles de streaming (RTMP, HLS).', 'Développement front-end et back-end robuste.', 'FFmpeg pour le traitement vidéo.', 'React ou Vue.js pour l’interface utilisateur.');

CREATE TABLE Users(
    id int PRIMARY KEY AUTO_INCREMENT,
    Prenom VARCHAR(20) NOT NULL,
    Nom VARCHAR(20) NOT NULL,
    Login VARCHAR(30) NOT NULL,
    Password VARCHAR(250) NOT NULL
);