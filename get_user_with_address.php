<?php
require './connexion.php';   // avoir acces au base de données
 
 
 // prepare la requette sql 
$query = $db->prepare("
    SELECT  first_name, city, street, zipcode 
    FROM users u
    JOIN address a ON u.address = a.id 
    WHERE u.id =:id
");

// recupérer les parameters 
$parameters = [
    'id' => $_GET['id']
];

$query -> execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

// afficher 
echo "<pre>";
var_dump($user);
echo "</pre>";




?>