<?php

    if (!session_start()) {
        session_start();
    }

    define('DEVEL', true);
    define('HEBERGEMENT_LOCAL', true);

    if (HEBERGEMENT_LOCAL) {
        $serverBd = '127.0.0.1';
        $usagerBd = 'root';
        $motDePasseBd = '';
        $nomBD = 'site_portfolio';
    }
    else {
        $serverBd = '';
        $usagerBd = '';
        $motDePasseBd = '';
        $nomBD = '';
    }

    @$mysqli = new mysqli($serverBd, $usagerBd, $motDePasseBd, $nomBD);

    if ($mysqli->connect_errno) {
        die("&Eacute;chec lors de la connexion &agrave; la base de donn&eacute;es");
    }

    $mysqli->set_charset("utf8");