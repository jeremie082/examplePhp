<?php

    //Exercice 1
    echo "Exercice 1 <br><br>";

    $note_maths = 3;
    $note_francais = 20;
    $note_histoire_geo = 5;

    //(note1 + note2 + note3) / nbre de note
    $moyenne = ($note_maths + $note_francais + $note_histoire_geo)/3;
    echo 'La moyenne est de '.$moyenne.' / 20.';


    //Exercice 2
    echo "<br><br>Exercice 2 <br><br>";
    $prix_ht = 50;
    $taux_tva = 20;

    //(prixHT * tauxTVA/100) + prixHT
    //prixHT * (1 + TVA / 100)
    $prix_ttc = $prix_ht * (1+ $taux_tva /100);
    echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';

    echo "<br><br>Exercice 3 <br><br>";
    $test = "42";
    var_dump($test);

    echo "<br><br>Exercice 4 <br><br>";
    $sexe = "F";

    if ($sexe == "F") {
        echo "Femme";
    }else {
        echo "Homme";
    }

    echo "<br><br>Exercice incrémente +2 <br><br>";
    $compteur = 0;
    
    while ($compteur  <= 20) {
        
        $compteur = $compteur + 2;
        if ($compteur == 10) {
            echo '<strong>'.$compteur.'</strong><br>';
        }else {
            echo $compteur.'<br>';
        }
    }


    echo "<br><br>Exercice rand tri <br><br>";       
    $init = 0;
    while($init < 10){
        $var = rand(0,100);
        $tabNbrRand[] = $var;
        $init++;
    }
    print_r($tabNbrRand);   
    foreach($tabNbrRand as $nombre){        
        if ($nombre < 50) {
            $tabInf50[] = $nombre;
        }
        if ($nombre >= 50) {
            $tabSup50[] = $nombre;
        }  
    }

    echo '<br><br>Tableau inférieur à 50 <br>';
    print_r($tabInf50);
    echo '<br><br>Tableau supérieur à 50 <br>';
    print_r($tabSup50);


    echo "<br><br>Exercice array ville <br><br>"; 

    $pays = array(
        'france' => 'paris',
        'allemagne' => 'berlin',
        'italie' => 'rome'
    );

    foreach($pays as $ville){
        echo $ville."<br>";

    }

    function HelloWorld(){
        echo "Hello world !! ";
    }

    HelloWorld();

    function HelloWorld1(){
        $echo = "hello dddddd";
        return $echo;
     }
     
     echo "<br><br>".HelloWorld1()."<br><br>";

     
    function afficherMsg($message1, $message2){
        if (!is_int($message1) AND !is_string($message2)) {
            echo 'erreur de type';
        }
        else{
            echo $message1." ".$message2;
        }
    }

    afficherMsg("ddd", "3333");
     


?>
