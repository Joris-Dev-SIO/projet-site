<?php
//inclure les fonctions pour la base
include("include/connexion.php");

//Insertion de données
$cnx=connect_bd('ap2');

if ($cnx) {
    // On prépare la requête (une seule fois)

    $id=$_POST["idInscrit"];
    $nom = $_POST["NomClient"];
    $prenom = $_POST["PrenomClient"];
    $ville = $_POST["NumTelephone"];
    $dateNaiss = $_POST["CP"];
    $tel = $_POST["PoidsClient"];
    

    $modif = $cnx->prepare("UPDATE inscrit SET idInscrit='$idInscrit' NomClient='$NomClient', PrenomClient='$PrenomClient', NumTelephone='$NumTelephone', CP='$CP', PoidsClient='$PoidsClient' WHERE inscrit=$id");
    $modif->execute();

    }

header("location:listage_adherent.php"); 
}else{
    echo "erreur";
}
 
deconnect_bd('ap2');