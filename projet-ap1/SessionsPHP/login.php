<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
	</head>
<body>
	<?php
	// Config : connexion au serveur de base de données
	require('config.php');
	// Initialisation de la session
	session_start();
	// Vérification des identifiants saisis
	if (isset($_POST['username']))
	{
		// Récupération des identifants
		$username = stripslashes($_REQUEST['username']);
		$password = stripslashes($_REQUEST['password']);
		// Préparation de la requête de vérification des identifiants
		$query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
		$result = $cnx->prepare($query);
		// On exécute la requête
		$result->execute();
		// Si la requête renvoie au moins 1 ligne
		if($result->rowCount()>0) 
		{ 
			$datas = $result->fetch(PDO::FETCH_OBJ);
			// Récupération de la donnée
			$userName = $datas->username;
			// Création de la variable de session
			$_SESSION['username'] = $username;
			// Renvoi vers la page d'accueil
			header("Location: ../listage_adherent.php");
		}
		else
		{
			$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
		}
	}
	else
	{ 
		echo "Erreur de connexion"; 
	}
	?>
	<form class="box" action="" method="post" name="login">
	
		<h1 class="box-logo box-title"><a href="#">Maison de la culture</a></h1>
		<h1 class="box-title">BIENVENUE</h1>
		
		<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
		<input type="password" class="box-input" name="password" placeholder="Mot de passe">
		<input type="submit" value="connexion " name="submit" class="box-button">
	
		<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
		
		<?php if (! empty($message)) { ?>
			<p class="errorMessage"><?php echo $message; ?></p>
		<?php } ?>
		
	</form>
</body>
</html>