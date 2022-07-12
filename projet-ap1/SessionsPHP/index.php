<?php
	// Initialisation de la session
	session_start();
	
	// On vérifie si l'utilisateur est connecté, sinon il est redirigé vers la page de connexion
	if(!isset($_SESSION["username"]))
	{
		header("Location: login.php");
		exit(); 
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="sucess">
			<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
			<p>Vous êtes connecté sur une page privée</p>
			<a href="logout.php">Déconnexion</a>
		</div>
	</body>
</html>