<?php
require './connexion.php'; // connexion à la base de données

// Préparer la requête SQL
$query = $db->prepare("
    SELECT u.*, a.*
    FROM users u
    JOIN address a ON u.address = a.id
");



// Exécuter 
$query->execute();

$user = $query->fetchAll(PDO::FETCH_ASSOC);

// Afficher pour debug
echo "<pre>";
var_dump($user);
echo "</pre>";
?>