<?php
require './connexion.php'; // pour accéder à la base de données

// Récupérer et sécuriser l'id
$id = (int) $_GET['id']; // conversion en entier pour éviter les injections

// Préparer la requête
$query = $db->prepare("SELECT * FROM users WHERE id = :id");

// Exécuter avec un tableau associatif
$query->execute(['id' => $id]);

// Récupérer le résultat
$user = $query->fetch(PDO::FETCH_ASSOC);

// Afficher le résultat pour debug
echo "<pre>";
var_dump($user);
echo "</pre>";
