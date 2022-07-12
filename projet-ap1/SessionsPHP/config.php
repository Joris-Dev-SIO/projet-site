<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'registration');
 
// Connexion � la base de donn�es MySQL 
//$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// V�rifier la connexion
//if($conn === false){
//    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());


try
	{
		// Connexion  � la BD et d�finition du jeu de caract�res UTF-8
		$cnx = new PDO("mysql:host=localhost;dbname=".DB_NAME, DB_USERNAME,DB_PASSWORD);
		$cnx->exec("SET CHARACTER SET utf8");
		//echo "connect� !";
		return $cnx;
	}
	catch (PDOException $e) 
	{
		print "Erreur de connexion� la base de donn�es !: " . $e->getMessage() . "<br/>";
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