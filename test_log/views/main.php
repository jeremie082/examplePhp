

<?php 
    session_start();

    print_r($_SESSION);
    if ($_SESSION['isConnect'] == 'oui') {
    ?>
    <h1>Bienvenu dans notre page d'exercice</h1><a href=""><?php session_destroy();?>deco</a>
    
    <?php
    

    ?>
        
<?php

    }else{
        require_once 'views/forrmLog.php';
    }
?>

