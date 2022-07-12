<?php
//inclure les fonctions pour la base
include("include/connexion.php");

//Insertion de données
$cnx=connect_bd('ap2');
//var_dump($_POST);
if ($cnx) {

    // On prépare la requête (une seule fois)
    $result = $cnx->prepare('INSERT INTO membres (nom, prenom, ville,civilite,idFonction, demande) 
    VALUES (:nom, :prenom, :ville, :civilite,:idFonction, :demande)');
    // On lie chaque marqueur à une variable en précisant le type de données
    $result->bindParam(':nom', $nom, PDO::PARAM_STR);
    $result->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $result->bindParam(':ville', $ville, PDO::PARAM_STR);
    $result->bindParam(':civilite', $civilite, PDO::PARAM_STR);
    $result->bindParam(':idFonction', $idFonction, PDO::PARAM_INT);  
    $result->bindParam(':demande', $demande, PDO::PARAM_STR);

    // On affecte aux variables les valeurs des données postées du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $ville = $_POST["ville"];
    $civilite = $_POST["civilite"];
    $demande = $_POST["demande"];
    $idFonction = $_POST["idFonction"];
    // On exécute la requête
    $result->execute();

    // Résultats
    echo '<p>'.$result->rowCount()." ligne a été ajoutée dans la table membres</p>";
    echo "<p>Il s'agit de $prenom $nom habitant à $ville</p>";
    // On récupère le dernier id auto-incrémenté inséré
    echo '<p>Son identifant est : '.$id.'</p>';

    }
else {
    echo "erreur";
}

deconnect_bd('ap2');
