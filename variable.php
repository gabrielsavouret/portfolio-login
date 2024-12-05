<?php

// Retrieving Variables Using the MySQL Client
$dataproject = $pdo->prepare('SELECT * FROM projets');
$dataproject->execute();
$dataprojet = $dataproject->fetchAll();