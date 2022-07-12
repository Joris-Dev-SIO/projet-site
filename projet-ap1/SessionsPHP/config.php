<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'registration');
 
// Connexion à la base de données MySQL 
//$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
//if($conn === false){
//    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());


try
	{
		// Connexion  à la BD et définition du jeu de caractères UTF-8
		$cnx = new PDO("mysql:host=localhost;dbname=".DB_NAME, DB_USERNAME,DB_PASSWORD);
		$cnx->exec("SET CHARACTER SET utf8");
		//echo "connecté !";
		return $cnx;
	}
	catch (PDOException $e) 
	{
		print "Erreur de connexionà la base de données !: " . $e->getMessage() . "<br/>";
		die();
		return 0;
	}

?>



<?php

// Fonction de deconnexion de la BD 
function deconnect_bd($nomBd) 
{ 
	$nomBd = null; 
}
?>