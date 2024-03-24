<?php
    include('./assets/include/header.php'); 
    require('./assets/include/config.php');

    if (isset($_GET["person"])) {
        $person = $_GET["person"];
        if ($person === 'Emile')
            include('./Assets/include/Emile/main.php');
        else if ($person === 'Justin')
            include('./Assets/include/Justin/main.php');
    }
    else {
        include('./Assets/include/Justin/main.php');
    }

    include('./assets/include/footer.php');
    require('./assets/include/nettoyage.php');