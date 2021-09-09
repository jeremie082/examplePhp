<?php
$title = "Exercice 3 </br>";
$enonce = "Créer une fonction qui s'appelle premierElementTableau().
Elle prendra un argument de type array.
Elle devra retourner le premier élement du tableau.
Si l'array est vide, il faudra retourner null;";

function premierElementTableau(){
    $tableau = array( 'France',
    'Paris',
    'Allemagne',
    'Berlin',
    'ITAlie',
    'Rome');
    return var_dump($tableau[0]);
}



function affichemsg(){
    $message = '$tableau = array( \'France\',
        \'Paris\',
        \'Allemagne\',
        \'Berlin\',
        \'ITAlie\',
        \'Rome\');
        return var_dump($tableau[0]);';
    return $message;
}


function titre($title, $enonce){
    ?>  
<div class="enonce">
                <h1 class="title"><?= $title ?></h1>
                <p><?= $enonce ?></p>
        
        <div class="flexbox">
                <div class="box animate__animated animate__backInUp"><pre class="pre"><code><?= affichemsg()?></code></pre></div>
                <div class="box animate__animated animate__backInUp lh"><?= premierElementTableau()?></div>
        </div>
</div>
        <?php
       
}
titre($title, $enonce);