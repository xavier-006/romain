<?php 


function save_connection ($username) {
    
    // Check si le fichier existe
    if (file_exists('db/users.txt') ) {
        // Ouvre le fichier en écriture
        $fp = fopen('db/users.txt', 'w');
        // Ecrit le username dans le fichier
        fwrite($fp, $username);
        // Ferme le fichier proprement
        fclose($fp);
    } 
}


function getAllUser() {
    $users = [];
    // Check si le fichier existe
    if (file_exists('db/users.txt') ) {
        $lines = file('db/users.txt');

        // Enregistre le fichier dans un tableau
        foreach($lines as $line) {

            if(empty($line)) continue;
            $users [] = $line;
          
        }

        return $users;
    }
}