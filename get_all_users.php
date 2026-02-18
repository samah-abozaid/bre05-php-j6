<?php
require './connexion.php';
// var_dump($db);
$query = $db->prepare('SELECT * FROM users');
var_dump($query);
//var_dump() pour vérifier que ta requête fonctionne correctement,
$result = $query->execute();
var_dump($result);
$users = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($users);
?>