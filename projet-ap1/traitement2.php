<?php
//inclure les fonctions pour la base
include("include/connexion.php");

//Insertion de données
$cnx=connect_bd('ap2');
//var_dump($_POST);
if ($cnx) {

    // On prépare la requête (une seule fois)
    $result = $cnx->prepare('INSERT INTO inscrit (NomClient, PrenomClient, CP,NumTelephone, PoidsClient, Sportive,idTarif,idNiveau  ) 
    VALUES (:NomClient, :PrenomClient, :CP ,:NumTelephone, :PoidsClient, :Sportive, :idTarif, :idNiveau )');
    // On lie chaque marqueur à une variable en précisant le type de données
    $result->bindParam(':NomClient', $NomClient, PDO::PARAM_STR);
    $result->bindParam(':PrenomClient', $PrenomClient, PDO::PARAM_STR);
    $result->bindParam(':CP', $CP, PDO::PARAM_INT);
    $result->bindParam(':NumTelephone', $NumTelephone, PDO::PARAM_STR);  
    $result->bindParam(':PoidsClient', $PoidsClient, PDO::PARAM_INT);
    $result->bindParam(':Sportive', $Sportive, PDO::PARAM_STR);
    $result->bindParam(':idTarif', $idTarif, PDO::PARAM_STR);
    $result->bindParam(':idNiveau', $idNiveau, PDO::PARAM_STR);

    

    // On affecte aux variables les valeurs des données postées du formulaire
    $NomClient = $_POST["NomClient"];
    $PrenomClient = $_POST["PrenomClient"];
    $CP = $_POST["CP"];
    $NumTelephone = $_POST["NumTelephone"];
    $PoidsClient = $_POST["PoidsClient"];
    $Sportive = $_POST["Sportive"];
    $idTarif = $_POST["idTarif"];
    $idNiveau = $_POST["idNiveau"];
    
    // On exécute la requête
    $result->execute();
    // Résultats
    echo '<p>'.$result->rowCount()." Vous êtez bien inscrit </p>";
    echo "<p>A la fomation $idNiveau  </p>";     
    // On récupère le dernier id auto-incrémenté inséré

    
    
    // On récupère le dernier id auto-incrémenté inséré
    $id=$cnx->lastInsertId();
    echo '<p>Ton identifant est : '.$id.'</p>';

    
    
    }
else {
    echo "erreur";
}

deconnect_bd('ap2');
echo "<tr><tr><a href='main.html' class='btn btn-success'>Return</a></tr></tr>";
?>

