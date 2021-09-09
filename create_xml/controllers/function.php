<?php
   
function create_xml($titre, $questions, $tabReponses){

    $fichier = fopen('models/'.$titre.'.xml', 'a+');
    $xml = new XMLWriter();
    $xml->openMemory();
    $xml->setIndent(2);
    $xml->startElement('quizz');
    $xml->startElement('ennonce');
    $xml->writeElement('question', $questions);   

    foreach($tabReponses as $reponse){
        $xml->writeElement('reponse', $reponse);
    }
    
    $xml->endElement();
    $xml->endElement();
    $xml2 = $xml->outputMemory(true);

    fputs($fichier, $xml2);
    fclose($fichier);
}

function create_json($titre, $questions, $tabReponses){
    $fichier = fopen('models/'.$titre.'.json', 'a+');
    $tab = [
            'question' => $questions,
            'reponse' => $tabReponses
    ];
    $json = json_encode($tab);
    fputs($fichier, $json);
    fclose($fichier);
    
}


function create_menu_xml(){
    if (count(glob("models/*.xml")) > 0) {
        foreach (glob("models/*.xml") as $filename) {
            $tabMenu[] = basename($filename,".xml"); 
            return $tabMenu;       
        }
    }   
}

function create_menu_json(){
    if (count(glob("models/*.json")) > 0) {
        foreach (glob("models/*.json") as $filename) {
            $tabMenu[] = basename($filename,".json"); 
            return $tabMenu;       
        }
    } 
}
?>