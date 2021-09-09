<?php


if (isset($_POST['ennonce']) && isset($_POST['name'])) {
   

    $fichier = fopen('exo/'.$_POST['name'].'.xml', 'a+');

    $xml = new XMLWriter();
    $xml->openURI($_POST['name'].'.xml');
    $xml->startElement('quizz');
    $xml->writeElement('ennonce', $_POST['ennonce']);
    //$xml->writeElement('reponse', $_POST['reponse']);
    $xml->endElement();
    $xml->flush();

    header('Location: index_old.php');
}
?>