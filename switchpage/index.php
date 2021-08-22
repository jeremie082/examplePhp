<?php
 
    include_once("menu.php");

    if (isset($_GET['site'])) {
        switch ($_GET['site']) {
            case 'home':
                include_once("home.php");
                break;
            
            default:
                echo '404 error';
                break;
        }
    }
    
 
?>