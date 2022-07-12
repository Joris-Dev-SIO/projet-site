<?php
// On établit la connexion
include("include/connexion.php");
//Insertion de données 
$cnx=connect_bd('ap2'); 
if($cnx) 
{
	// On prépare la requête (une seule fois)
	$result = $cnx->prepare('SELECT * FROM inscrit');
	// On exécute la requête
	$result->execute();
	// Si la requête renvoie au moins 1 ligne
	if($result->rowCount()>0)
	{
		echo "<table border=\"1\">"; 
		//entête du tableau 
		echo "<tr>"; 
		echo "<th>id</th>";
		echo "<th>Nom</th>";
		echo "<th>Prenom</th>"; 
		echo "<th>Numéro de téléphone</th>";
		echo "<th>CP</th>";
		echo "<th>Poids</th>";
		echo "<th>Supprimer</th>";
		echo "<th>Ajouter</th>";
		echo "<th>Modifier</th>";
		echo "</tr>"; 
		// On parcours les résultats
		while ($donnees = $result->fetch())
		{
			echo "<tr>";
			   echo "<td>".$donnees['idInscrit']."</td>"; 
			   echo "<td>".$donnees['NomClient']."</td>";
			   echo "<td>".$donnees['PrenomClient']."</td>";  
			   echo "<td>".$donnees['NumTelephone']."</td>"; 
			   echo "<td>".$donnees['CP']."</td>"; 
			   echo "<td>".$donnees['PoidsClient']."</td>";
             echo  "<td> <a href='supprimer.php?idInscrit=$donnees[idInscrit]' class='btn btn-danger'>Supprimer</td>";
              echo  "<td> <a href='formulaire2.php?' class='btn btn-danger'>Ajouter</td>";
              echo  "<td> <a href='modifier.php?' class='btn btn-danger'>Modifier</td>";
			echo "</tr>"; 
		}
		echo "</table>"; 
	}
	else
	{
		echo "Aucun enregistrement, désolé"; 
	}
	deconnect_bd('ap2');

}

  echo "<tr><tr><a href='main.html' class='btn btn-success'>Déconnexion</a></tr></tr>";
?>


	