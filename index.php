<?php
    include('./assets/include/header.php'); 
    require('./assets/include/config.php')
?>
    <main class="main">
<<<<<<< HEAD
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
=======
        <div class="main-container">
            <h1>Bienvenue à mon Portfolio !</h1>
            <p>Mon nom est Justin Chaput étudiant en informatique passionnée de l'informatique</p>
            <p>Je suis actuellement en formation pour devenir technicien en informatique</p>
            <p>Se site va démontrer mes capcitées en develeppement Web</p>
            <p>Je vous invite à visiter mes projets et à me contacter pour plus d'informations s</p>
            <img src="" alt="Justin">
        </div>
>>>>>>> 6fb73e519effccc9e684bc757883fbddcc6900af
    </main>
<?php
    include('./assets/include/footer.php');
    require('./assets/include/nettoyage.php');