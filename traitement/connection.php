<?php
require_once "../assets/include/functions.php";
require "../assets/include/config.php";

if (!empty($_POST)) {
    foreach ($_POST as $element => $valeur) {
        $_POST[$element] = htmlspecialchars($valeur, ENT_QUOTES);
    }

    if (isset($_POST['emailUsername'])) {
        $emailUsername = $_POST['emailUsername'];
    }

    if (isset($_POST['password'])) {
        $passwordClear = $_POST['password'];
    }

    if (isset($_POST['stay-login'])) {
        $stayLogin = $_POST['stay-login'];
    }

    $_SESSION['message_erreur'] = "";

    $requete = "SELECT id,username,nom,prenom,email,password,actif,role FROM user WHERE (email = ? OR username = ?) AND actif = 1";
    $stmt = $mysqli->prepare($requete);

    if ($stmt) {
        $stmt->bind_param('ss', $emailUsername,$emailUsername);

        $stmt->execute();
        $stmt->store_result();

        if (0 == $stmt->errno) {
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $username, $nom, $prenom, $email, $passwordBd, $actif, $role);

                $stmt->fetch();
            }
            else {
                $_SESSION['message_erreur'] = "Mauvais email ou mot de passe";
            }
        }
        else {
            $_SESSION['message_erreur'] = "Mauvais email ou mot de passe";
        }

        $stmt->close();
    }
    else {
        $_SESSION['message_erreur'] = "Mauvais email ou mot de passe";
    }
}
else {
    $_SESSION['message_erreur'] = "Mauvais email ou mot de passe";
    header("Location: ../index.php");
}

$ok = password_verify($passwordClear, $passwordBd);

if ($ok) {
    $requete = "UPDATE user SET derniere_connection = NOW() WHERE id = ?";
    $stmt = $mysqli->prepare($requete);

    if ($stmt) {

        $stmt->bind_param('i', $id);

        $stmt->execute();
        $stmt->close();
    }

    $_SESSION['nom-prenom'] = strtoupper($prenom[0]) . substr($prenom,1) . " " . strtoupper($nom[0]) . substr($nom,1);

    $cookie_expiration_time = time()+60*60*24*30;

    if ($stayLogin) {
        setcookie("user_login", $username, $cookie_expiration_time);
        
        $random_password = genToken(32);
        setcookie("random_password", $random_password, $cookie_expiration_time);

        $requete = "SELECT id FROM user_token WHERE user_id = ?";
        $stmt = $mysqli->prepare($requete);

        if ($stmt) {
            $stmt->bind_param('i', $id);

            $stmt->execute();
            $stmt->store_result();

            if ($stmt->errno === 0) {
                if ($stmt->num_rows() > 0) {
                    $stmt->bind_result($id_user_cookies);
    
                    $stmt->fetch();
                }
            }
            $stmt->close();
        }

        if (isset($id_user_cookies)) {
            $requete = "UPDATE user_token SET token = ? WHERE user_id = ?";
            $stmt = $mysqli->prepare($requete);

            if ($stmt) {

                $stmt->bind_param('si', $random_password, $id_user_cookies);

                $stmt->execute();
                $stmt->close();
            }
        }
        else {
            $requete = "INSERT INTO user_token (user_id,token) VALUES (?,?)";
            $stmt = $mysqli->prepare($requete);

            if ($stmt) {

                $stmt->bind_param('is', $id, $random_password);

                $stmt->execute();
                $stmt->close();
            }
        }
    }
    else {
        if (!isset($_SESSION['identifier'])) {
            $_SESSION['identifier'] = true;
        }
        else if (!$_SESSION['identifier']) {
            $_SESSION['identifier'] = true;
        }
    }
    header('Location: ../index.php');
}
else {
    $_SESSION['message_erreur'] = "Mauvais email ou mot de passe";
    header('Location: ../index.php');
}