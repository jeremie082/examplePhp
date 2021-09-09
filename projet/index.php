<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Quizz</title>
</head>
<body>
     <?php
        print_r($_SESSION);


            if (isset($_GET['page'])) {  
                if ($_GET['page'] == 'login') {
                    include_once('config/connection.php');
                }
                if ($_GET['page'] == 'destroy') {
                    include_once('templates/loginForm.php');
                    session_destroy();
                }  
                if ($_SESSION['connect'] == "ok") {      
                    switch ($_GET['page']) {
                        case 'home':
                            include_once('templates/home.php');
                            break;
        
                        default:
                            include_once('templates/loginForm.php');
                            break;
                    }
                }
            }else{
                include_once('templates/loginForm.php');
            }    
    
            if (isset($_GET['message'])) {
                switch ($_GET['message']) {
                    case 'perdu':
                        echo "Vous avez perdu !!!";
                        break;
                    case 'moins':
                        echo "C'est moins !!!";
                        break;
                    case 'plus':
                        echo "C'est plus !!!";
                        break;
                    default:
                       
                        break;
                }
            }

 
     ?>
</body>
</html>