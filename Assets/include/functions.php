<?php

function inclureJsPropreALaPageActuelle() {
    $dossierRacineSite = dirname(__FILE__, 2);

    // Le deuxième paramètre de basename permet de supprimer cette chaîne de la valeur retournée
    $pageActuelleSansExtension = basename( $_SERVER['SCRIPT_NAME'], '.php');

    if (DEVEL) {
        if (file_exists($dossierRacineSite . '/assets/js/' . $pageActuelleSansExtension . '.js')) {
            echo "<script src='../assets/js/$pageActuelleSansExtension.js' defer></script>";
        }
    }
    else {
        echo "<script src='../assets/js/$pageActuelleSansExtension-combiner-minifier.js' defer></script>";
    }
}

function genToken($numberLength) {
    $tockens = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
                'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
                '0','1','2','3','4','5','6','7','8','9',
                '!','#','$','%','&','(',')','*','+','-','/'];
    $token = "";
    for ($i=0; $i<$numberLength; $i++) {
        $token .= $tockens[rand(0, 72)];
    }

    return $token;
}