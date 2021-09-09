<?php
     session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>

    <?php

    print_r($_SESSION);
        require_once 'controllers/functions.php';
        require_once 'controllers/router.php';

            if (!empty($_SESSION['isConnect']) &&  $_SESSION['isConnect'] == 'oui') {
                header('Location: index.php?page=main');
            }else{
                header('Location: index.php?page=login');
            }
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'login':
                        include_once('views/formLog.php') ;
                        break;
                    
                    default:
                        include_once('views/formLog.php') ;
                        break;
                }
            }
            
            // if (isset($_POST['log']) && isset($_POST['pwd'])) {
            //     if(connection($_POST['log'], $_POST['pwd'])){
            //         if (empty($_SESSION['isConnect']) ||  $_SESSION['isConnect'] != 'oui') {
            //             require_once 'views/forrmLog.php';
                
            //         }else{
            //             include_once('views/menu.php');
            //             header('Location: views/main.php');
            //         }  
            //     }else{
            //         require_once 'views/forrmLog.php';
            //     }
            // }else{
            //     require_once 'views/forrmLog.php';
            // }
        
     
            

        

    ?>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>