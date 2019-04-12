<?php

include_once('model/user/user.php');


$users = [];

// Check logged in
if ( ! isset($_SESSION['loggedin']) || ! $_SESSION['loggedin'] == true) {
    header("Location: http://localhost/romain/index.php/?section=login");
} else {
   
    // Determine si le user est Admin
    $isAdmin = trim($_SESSION['username']) == "Administrateur"; 

    // Si oui
    if($isAdmin) {
        // On récupère la liste des users dans le fichiers
        $users = getAllUser();
    } else {
        header("Location: http://localhost/romain/index.php");
    }
}

include("view/utilisateurs/index.php");