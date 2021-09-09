<?php //Activité 27
$title = "Exercice 2 </br>";
$enonce = "Créer une fonction qui s'appelle capital(). Elle prendra un argument de
type string. Elle devra retourner le nom de la capitale des pays suivants :";


function verificationsPassword(){
    $password = true;
    $pass = 'Ab06@505021der*';
    if (preg_match("#^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[*.!@$%^&(){}[]:;<>,.?/~_+-=|\]).{8,}$#",  $pass) && strlen($pass)>=8){
        echo 'wellcome';
        return $password;
    }
    else {
        echo 'wrong password';
    return (FALSE);}
}



function affichemsg(){
    $message = '
    $password = true;
    function verificationsPassword($password){
    $pass = \'Ab06@505021der*\';
    if (preg_match("#^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])<br/>(
    ?=.*[*.!@$%^&(){}[]:;<>,.?/~_+-=|\]).{8,}$#",  $pass) && strlen($pass)>=8){
    echo \'wellcome\';
    return $password;
    }
    else {
    echo \'wrong password\';
    return (FALSE);}
}';
return $message;
}




function titre($title, $enonce){
    ?>  
<div class="enonce">
                <h1 class="title"><?= $title ?></h1>
                <p><?= $enonce ?></p>
        
        <div class="flexbox">
                <div class="box animate__animated animate__backInUp"><code><?= affichemsg()?></code></div>
                <div class="box animate__animated animate__backInUp lh"><?= verificationsPassword()?></div>
        </div>
</div>
        <?php
       
}
titre($title, $enonce);

