<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/class.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Classes</title>
</head>
<body>
    <h1><span class="badge bg-dark">Connexion Réussie</span></h1>

    <?php
    //---Erreurs Management---//
    ini_set('display_errors','1');
    ini_set('display_startup_errors','1');
    error_reporting(E_ALL);

    // Intégration de notre classe 
    require("./magasin.class.php");
    ?>
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#instruments" role="button" aria-expanded="false" aria-controls="instruments">
            Instruments
        </a>
        <a class="btn btn-success" data-bs-toggle="collapse" href="#piano" role="button" aria-expanded="false" aria-controls="piano">
            Piano
        </a>
    </p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="instruments">
                <div class="card card-body text-bg-dark">
                    <?php
                    $guitare = new Instruments("RockX2",75,95);
                    var_dump($guitare);
                    ?>
                </div>
            </div>
        </div>
    </div>
        <div class="col">
            <div class="collapse multi-collapse" id="piano">
                <div class="card card-body text-bg-dark">
                    <?php
                    $piano1 = new Numerique("Classique",75,95);
                    $piano1->set_rateEchantillon(2);
                    $piano1->affiche($piano1);
                    ?>
                </div>
            </div>
        </div>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>