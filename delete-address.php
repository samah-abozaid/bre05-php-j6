<?php
require './connexion.php'; // connexion à la base de données

// Vérifier que le formulaire est bien soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {

    // Sécuriser la valeur (forcer en entier)
    $id = (int) $_POST['id'];

 $db->prepare("UPDATE users SET address = NULL WHERE address = :id")
   ->execute(['id' => $id]);

$db->prepare("DELETE FROM address WHERE id = :id")
   ->execute(['id' => $id]);


    // Exécuter avec paramètre sécurisé
    $query->execute([
        'id' => $id
    ]);

    // Vérifier si une ligne a été supprimée
    if ($query->rowCount() > 0) {
        echo "Adresse supprimée avec succès !";
    } else {
        echo "Aucune adresse trouvée avec cet ID.";
    }

} else {
    echo "Requête invalide.";
}
?>
