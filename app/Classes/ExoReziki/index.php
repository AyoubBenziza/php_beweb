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
    require("./ville.class.php");
    ?>
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#exercice1" role="button" aria-expanded="false" aria-controls="exercice1">
            Exercice 1
        </a>
        <a class="btn btn-success" data-bs-toggle="collapse" href="#exercice2" role="button" aria-expanded="false" aria-controls="exercice2">
            Exercice 2
        </a>
        <a class="btn btn-success" data-bs-toggle="collapse" href="#exercice3" role="button" aria-expanded="false" aria-controls="exercice3">
            Exercice 3
        </a>
    </p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="exercice1">
                <div class="card card-body text-bg-dark">
                    <?php
                    $ville = new Ville("Montpellier","Hérault");
                    var_dump($ville);
                    echo $ville->getLocation();
                    ?>
                </div>
            </div>
        </div>
    </div>
        <div class="col">
            <div class="collapse multi-collapse" id="exercice2">
                <div class="card card-body text-bg-dark">
                    <?php
                    $villeC = new VilleC("Montpellier","Hérault");
                    var_dump($villeC);
                    echo $ville->getLocation();
                    ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="collapse multi-collapse" id="exercice3">
                <div class="card card-body text-bg-dark">
                    <?php
                    $personne = new Personne("Ayoub","Benziza","34 Avenue de Montpellier");
                    var_dump($personne);
                    echo $personne->getPersonne();
                    $personne->setAdresse("18 Rue de Rouens");
                    echo $personne->getPersonne();
                    ?>
                </div>
            </div>
        </div>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>