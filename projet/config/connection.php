<?php

    if (empty($_SESSION['bonChoix'])) {
        $_SESSION['bonChoix'] = rand(1,4);
        echo 'je suis vide gggg     '.$_SESSION['bonChoix']. "<br>";
    }
    if ($_SESSION['bonChoix'] < $_POST['chiffre']) {
       
        header('location: index.php?page=ttt&message=moins');
    }else if ($_SESSION['bonChoix'] > $_POST['chiffre']) {
        
        header('location: index.php?page=ttt&message=plus');
    }else if ($_SESSION['bonChoix'] == $_POST['chiffre']) {
        $_SESSION['connect']  = "ok";
        header('location: index.php?page=home');
    }else{
        
        header('location: index.php?page=ttt&message=perdu');
    }
 
?>