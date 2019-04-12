<?php

// Permet d'inclure les différents fichier dans la page ce qui permet d'utiliser les fonctions contenues à l'interieur de ceux-ci
include_once('model/user/user.php');
include_once('model/catalogue/catalogue.php');
include_once('model/catalogue/produit.php');

// Vérifie si l'utilisateur est bien loggué avant d'accèder à la page
if ( ! isset($_SESSION['loggedin']) || ! $_SESSION['loggedin'] == true) {
    // L'utilisateur n'était pas loggué donc on le redirige vers la page de login (en passant par le controller)
    header("Location: http://localhost/romain/index.php/?section=login");
} else {
   
    // On est bien loggué !

    // Determine si le user est Admin
    $isAdmin = $_SESSION['username'] == "Administrateur"; 

    // Enregistre l'utilisateur comme connecté dans le fichier
    save_connection($_SESSION['username']);

    // Extrait tous les smartphones contenus dans le fichiers et les place dans un tableau sous forme d'object Produit
    $catalogues = getAll();


}

include("view/catalogue/index.php");