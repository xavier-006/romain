<?php
include_once('model/login/login.php');

$error = '';
$error_msg = '';

// Check si on recoit des paramètre post username et password de la requete --> Si c'est le cas, on fait une demande de connection
if(isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check si le username ou le password contient | 
    if (strpos($username, '|') !== false || strpos($password, '|') !== false) {
        $error_msg = "Le nom d'utilisateur et le mot de passe ne peuvent contenir le caratère '|'";
        $error = 1;

    }
   
    if ($error != 1) {

        // Check si l'utilisateur et le mot de passe sont présent dans le fichier, si oui, on peut logguer l'utilisateur
        $valid = checkCredentials($username, $password);
        if($valid) {

            // Si on a coché la case 'remember', on crée un cookie d'une durée de 30 jours. On checkera si on a un cookie dans index.php
            if ($_POST['remember']) {
                setcookie('romainLogged', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
            }
    
            // Enregistre le username en session
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
    
            // On est loggué, on peut être redirigé vers la page d'acceuil
            header("Location: http://localhost/romain/index.php");
    
        } else {
            
            // On n'a pas trouvé le user dans le fichier, on affiche un message d'erreur à l'utilsateur dans la vue grace à cette variable.
            $error = true;
            $error_msg = "Username or password incorrect";
        } 
    }
   
   
} 

// Si il y a un paramètre logout dans la requete, c'est une demande de déconnexion
if (isset($_GET['logout'])) {

    // On supprime le cookie
    unset($_COOKIE['romainLogged']);
    setcookie('romainLogged', '', time() - 3600, '/');

    // On supprime les sessions
    unset($_SESSION['loggedin']);
    unset($_SESSION['username']);

    // On redirige vers la page d'acceul
    header("Location: http://localhost/romain/index.php");
}

include("view/login/index.php");




