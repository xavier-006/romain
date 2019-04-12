<?php 


function checkCredentials($_username, $_password){

    $found = false;

    if (file_exists('db/login.txt') ) {
        $lines = file('db/login.txt');

        foreach($lines as $line) {

            if(empty($line)) continue;

            $lineArr = explode('|', $line);
            // username only
            $username = $lineArr[0];
            // password
            $password =  $lineArr[1];

            if(trim($_username) == trim($username) && trim($_password) == trim($password)) {
                // User found !
                $found = true;
                break;
            }
          
        }

        return $found;

    }

}
