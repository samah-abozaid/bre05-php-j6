<?php
require './connexion.php'; // pour accéder à la base de données

// Récupérer et sécuriser l'id
$id =[
    'id'=> $_GET['id']
    ]; 

// Préparer la requête
$query = $db->prepare("SELECT * FROM users WHERE id = :id");

$query->execute( $id);

// Récupérer le résultat
$user = $query->fetch(PDO::FETCH_ASSOC);

var_dump($user);

?>