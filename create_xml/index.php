<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">  
    
    <title>Création de fichier xml</title>
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <form action="" method="post" class="row gy-2 gx-3 align-items-center">
            <div class="col-auto">
                <input type="text" class="form-control" id="autoSizingInput" name="name" placeholder="Un nom à l'exercie">
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" id="autoSizingInput" name="ennonce" placeholder="Un ennoncé">
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" id="autoSizingInput" name="a" placeholder="Réponse 1">
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" id="autoSizingInput" name="b" placeholder="Réponse 2">
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" id="autoSizingInput" name="c" placeholder="Réponse 3">
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" id="autoSizingInput" name="d" placeholder="Réponse 4">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
    </div>


     <?php
        require_once 'controllers/function.php';

        if (isset($_POST['name']) && isset($_POST['ennonce']) && isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) && isset($_POST['d'])) {
            $tabReponse = array($_POST['a'], $_POST['b'], $_POST['c'], $_POST['d']);

            create_xml($_POST['name'], $_POST['ennonce'], $tabReponse);

            create_json($_POST['name'], $_POST['ennonce'], $tabReponse);
        }

     ?>

<div class="container" style="margin-bottom: 50px;">
<h1>Manipuler un fichier XML</h1>
<div class="container" style="margin-bottom: 50px;">
<h1>Manipuler un fichier JSON</h1>
<?php
    
foreach(create_menu_json() as $test){
    echo '<a href="index.php?exojson='.$test.'" type="button" class="btn btn-outline-primary" style="margin-top:35px;margin-right:5px;">'.$test.'</a>';

}
?>
<ul class="list-group list-group-numbered">
<?php
if (isset($_GET['exojson'])) {

    $fichier = file_get_contents("models/".$_GET['exojson'].".json");
    $tabDonnee = json_decode($fichier);
    echo '<br><br><h2>'.$tabDonnee->question.'</h2>';
    foreach($tabDonnee->reponse as $a){
        
?>
        <li class="list-group-item"><?= $a ?></li>
<?php
    }  
    
}

?> 




</ul>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>