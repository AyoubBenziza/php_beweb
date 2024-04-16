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
    require("./hopital.class.php");
    ?>
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#infirmier" role="button" aria-expanded="false" aria-controls="infirmier">
            Infirmier
        </a>
        <a class="btn btn-success" data-bs-toggle="collapse" href="#malade" role="button" aria-expanded="false" aria-controls="malade">
            Malade
        </a>
    </p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="infirmier">
                <div class="card card-body text-bg-dark">
                    <?php
                    $infirmier = new Infirmier(18,"18h30",1500);
                    // $infirmier->setId(18);
                    // $infirmier->setRotation("18h30");
                    // $infirmier->setSalaire(1500);
                    var_dump($infirmier);
                    ?>
                </div>
            </div>
        </div>
    </div>
        <div class="col">
            <div class="collapse multi-collapse" id="malade">
                <div class="card card-body text-bg-dark">
                    <?php
                    $malade = new Malade(666,"Poisse","Jean-Michel","34 rue de Montpellier","06-66-66-66-66",66,"Arrêt cardiaque dû au seum","M. Karma");
                    var_dump($malade);
                    ?>
                </div>
            </div>
        </div>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>