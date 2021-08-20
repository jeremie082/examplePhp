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

?>

