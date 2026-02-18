<?php
require './connexion.php'; // connexion à la base de données

//  Récupérer et sécuriser les valeurs

$id      = (int) $_POST['id'];
$street  = $_POST['street'];
$city    = $_POST['city'];
$zipcode = $_POST['zipcode'];

// Préparer la requête SQL pour mettre à jour l'adresse
$query = $db->prepare("
    UPDATE address
    SET street = :street, city = :city, zipcode = :zipcode
    WHERE id = :id
");

// Exécuter la requête avec les paramètres
$query->execute([
    'street'  => $street,
    'city'    => $city,
    'zipcode' => $zipcode,
    'id'      => $id
]);

// Confirmation
echo "Adresse modifiée avec succès !";
