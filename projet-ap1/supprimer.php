<?php
//inclure les fonctions pour la base
include("include/connexion.php");

//Insertion de données
$cnx=connect_bd('ap2');

$id=$_GET['idInscrit'];
$i = 0;
    
        $supp=$cnx->prepare("DELETE FROM inscrit WHERE idInscrit =$id");
        $supp->execute();
        $i++;
    

header("location:listage_adherent.php");

deconnect_bd('ap2');

?>