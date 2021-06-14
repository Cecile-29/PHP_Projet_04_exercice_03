<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet03 Exercice01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet04 Exercice03</h1>
            <h6 class="col-12 text-info text-center">Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et 
            comme valeurs cinq langage de programmation. Affichez le troisième langage.</h6>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php
                $languageIT = [1 => 'Javascript', 2 => 'Ruby', 3 => 'Boostrap', 4 => 'Python', 5 => 'C++'];
                // var_dump($languageIT);
                echo $languageIT[2];
            ?>
        </div>
    </div>
</body>
</html>