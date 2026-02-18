<?php
require './connexion.php';   // avoir acces au base de données
 
 
 // prepare la requette sql 
$query = $db->prepare("
    SELECT city  
    FROM address a 
    JOIN users u ON u.address = a.id 
    WHERE u.id =:id
");

// recupérer les parameters 
$parameters = [
    'id' => $_GET['id']
];

$query -> execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

// afficher 
var_dump($user);




?>