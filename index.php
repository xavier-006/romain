<?php

/*

Point d'entrée du site : Le but de cette page est d'analyser la requêtes 
et ses différents paramètre afin de router l'utilsateur vers la bonne page.

Le site a été concu en suivant le modèle MVC. Le routeur se charge donc d'inclure le bon controlleur qui à son tour inclura la bonne vue.

*/

// Permet de signifier à php que l'on utilise des sessions
session_start();

// Check si un cookie a préalablement été crée, si c'est le cas, on récupère le username et on l'enregistre en session
if(isset($_COOKIE['romainLogged'])) {
	$_SESSION['loggedin'] = true;
	$_SESSION['username'] = $_COOKIE['romainLogged'];	
}

// url : localhost/romain/index.php?section=catalogue --> On demande la page catalogue donc on appelle le controller catalogue.
if (!isset($_GET['section']) OR $_GET['section'] == 'catalogue')
{
	include('controller/catalogue/index.php');
}
elseif($_GET['section'] == 'login')
{
	include('controller/login/index.php');
}
elseif($_GET['section'] == 'admin')
{
	include('controller/utilisateurs/index.php');
}
// Par défaut, on redirige vers catalogue qui est la page principale
else include('controller/catalogue/index.php');