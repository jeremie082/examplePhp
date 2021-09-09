<?php
     session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .titre{
            color: red;
        }
    </style>
</head>
<body>
    <form action="createXml.php" method="post">
        <p>Donnez un nom à l'exercie</p>
        <input type="text" name="name" id="">
        <p>Donnez un ennoncé</p>
        <input type="text" name="ennonce" id="">
        <input type="submit" value="Valider">
    </form>

<?php
    $quizz = simplexml_load_file('test .xml');
        print_r($quizz);
        foreach ($quizz as $ennonce) { ?>

          <h1 class="titre">Ennoncé :</h1> <?= $ennonce ?> <br/>
   <?php
        }
        

    ?>
</body>
</html>