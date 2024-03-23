<?php
    include('./assets/include/header.php'); 
    require('./assets/include/config.php')
?>
    <main class="main">
        <?php 
        if (isset($_GET['person'])) {
        $person = $_GET['person'];
        if ($person === 'Emile') {
            include('./assets/include/Emile/main.php'); 
        } else if ($person === 'Justin') {
            include('./assets/include/Justin/main.php'); 
        }
        exit;
        } 
        ?>
    </main>
<?php
    include('./assets/include/footer.php');
    require('./assets/include/nettoyage.php');