<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<?php
	require('config.php');

	if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
		// Récupération des informations utilisateur

		//requéte SQL + mot de passe crypté
		$query = "INSERT into users (username, email, password)
				  VALUES (:username, :email, :passwordCrypt)";
				  
		// On prépare la requête (une seule fois)
		$result = $cnx->prepare($query);

		// On lie chaque marqueur à une variable en précisant le type de données
		$result->bindParam(':username', $username, PDO::PARAM_STR);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->bindParam(':passwordCrypt', $passwordCrypt, PDO::PARAM_STR);

		// On affecte aux variables les valeurs des données postées du formulaire
		$username = stripslashes($_REQUEST['username']);
		$email = stripslashes($_REQUEST['email']);
		$password = stripslashes($_REQUEST['password']);
		$passwordCrypt = hash('sha256', $password);

		// On exécute la requête
		$result->execute();		  
				  
		$res = $result->rowCount();
		if($res==1)
		{
			echo "<div class='sucess'>
					<h3>Vous êtes inscrit avec succès.</h3>
					<p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
				</div>";
		}
	}else{
	?>
	<form class="box" action="" method="post">
		<h1 class="box-logo box-title"><a href="https://waytolearnx.com/">Maison de la culture</a></h1>
		<h1 class="box-title">S'inscrire</h1>
		<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
		<input type="text" class="box-input" name="email" placeholder="Email" required />
		<input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
		<input type="submit" name="submit" value="S'inscrire" class="box-button" />
		<p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
	</form>
	<?php } ?>
</body>
</html>