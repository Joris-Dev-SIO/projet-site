<?php

// Fonction de connexion à la BD
function connect_bd($nomBd){
    $login='root';
    $passWd=''; 

    try {
        // Connexion à la BD et définition du jeu de caractères UTF-8
        $cnx = new PDO("mysql:host=localhost;dbname=$nomBd", $login, $passWd);
        $cnx->exec("SET CHARACTER SET utf8");
        echo "connecté !";
        return $cnx;
    }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>"; die(); return 0;
    }
}

// Fonction de deconnexion de la BD 
function deconnect_bd($nomBd) {
    $nomBd = null;
}
