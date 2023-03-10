<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=comparoperator', 'root', '');
} catch (Exception $e) {
    echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
}
