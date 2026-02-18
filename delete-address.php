<?php
require './connexion.php'; // connexion à la base de données

//  Récupérer et sécuriser les valeurs

$id      = (int) $_POST['id'];

// Préparer la requête SQL pour mettre à jour l'adresse
$query = $db->prepare("
    DELEAT FROM adresse 
    WHERE id = :id
");

// Exécuter la requête avec les paramètres
$query->execute([
    'id'=> $id
]);

// Confirmation
echo "Adresse modifiée avec succès !";