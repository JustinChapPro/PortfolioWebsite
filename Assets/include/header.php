<?php
  require_once "./assets/include/functions.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/script.js" defer></script>
    <script src="https://kit.fontawesome.com/16ddabd7d0.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
  <nav id="navbar">
    <div class="navbar_nom"><h1>Mon Portfolio</h1></div>

    <!-- Toggle pour choisir entre moi et Émile -->
    <div class="toggle-wrapper">
      <input type="checkbox" id="toggle" class="toggle" <?php getJustinEmile() ?>>
      <label for="toggle" class="toggle-label"></label>
      <p class="toggle-text">Switch entre <span id="Justin">Justin</span> <span id="Emile">Émile</span>  !</p>
    </div>
    <button class="hamburger"><i class="fa-solid fa-bars"></i></button>
    <ul class="navbar-nav">
      <li class="nav-item"><a href="#">Accueil</a></li>
      <li class="nav-item"><a href="#">Mes Projets</a></li>
      <li class="nav-item apropos-item">
        <a href="#apropos">À propos <i class="fa-solid fa-caret-down"></i></a>
        <ul class="submenu">
          <li class="nav-item"><a href="#">Moi Justin</a></li>
          <li class="nav-item"><a href="#">Cv</a></li>
          <li class="nav-item"><a href="#">Compétences</a></li>
        </ul>
      </li>
      <li id="connection-option" class="nav-item"><a href="#">Connect</a></li>
    </ul>
  </nav>
</header>
