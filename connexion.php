<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "samahabozaid_phpj6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "samahabozaid";
$password = "0090ee5530a6fe63bdb9556ba9405869";

$db = new PDO(
    $connexionString,
    $user,
    $password
);




?>
