<?php
require './connexion.php';


// Récupérer les valeurs
$street  = $_POST['street'];
$city    = $_POST['city'];
$zipcode = $_POST['zipcode'];

// Préparer la requête SQL
$query = $db->prepare("
    INSERT INTO address (street, city, zipcode)
    VALUES (:street, :city, :zipcode)
");

// Tableau associatif
$parameters = [
    'street'  => $street,
    'city'    => $city,
    'zipcode' => $zipcode
];

// Exécuter la requête
$query->execute($parameters);


$id = $db->lastInsertId();

echo "Adresse créée avec succès. ID = $id";
