<?php 

function getAll () {

        // Déclare le tableau
        $catalogues = [];
    
        // Vérifie si le fichier existe avant de travailler avec
        if (file_exists('db/liste_SP.txt') ) {
            // Place le contenu du fichier dans la variable $lines sous forme de tableau;
            $lines = file('db/liste_SP.txt');
    
            // parcours le tableau de lignes ligne par ligne
            foreach($lines as $line) {
    
                // Si c'est une ligne vide, on passe à la ligne suivante
                if(empty($line)) continue;

                // On décompose la ligne via le caractère ';' et on l'enregistre dans un tableau
                $lineArr = explode(';', $line);

                // Convertit le tableau dans un object produit pour plus de facilité de manipulation
                $produit = new Produit($lineArr[0],  $lineArr[1],  $lineArr[2],  $lineArr[3],  $lineArr[4],  $lineArr[5], $lineArr[6]);

                // On ajoute le nouveau produit au tableau $catalogues
                $catalogues [] = $produit;
              
            }
    
            // Retourne le tableau
            return $catalogues;
    
        }

}