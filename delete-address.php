<?php
require './connexion.php'; // connexion à la base de données

//  Récupérer et sécuriser les valeurs

$id      = $_POST['id'];

// Préparer la requête SQL pour mettre à jour l'adresse
$query = $db->prepare("DELETE FROM address WHERE id = :id");

$parameters = [
    'id' => $id
];
$query->execute($parameters);


// Confirmation
echo "Adresse supprimer avec succès !";

?>