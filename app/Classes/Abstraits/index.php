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
    require("./abstraits.php");
    ?>
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#abstrait" role="button" aria-expanded="false" aria-controls="abstrait">
            Abstrait
        </a>
        <!-- <a class="btn btn-success" data-bs-toggle="collapse" href="#admin" role="button" aria-expanded="false" aria-controls="admin">
            Admin
        </a> -->
    </p>
    <!-- <div class="row">
        <div class="col"> -->
            <div class="collapse" id="abstrait">
                <div class="card card-body text-bg-dark">
                    <?php
                    // Vérifier l'incapacité  d'instancier une classe abstraite(error)

                    $class1 = new ConcreteClass1;
                    $class1->printOut();
                    echo $class1->prefixValue('TEST') ."<hr>";

                    $class2 = new ConcreteClass2;
                    $class2->printOut();
                    echo $class2->prefixValue('TEST');
                    
                    ?>
                </div>
            </div>
        <!-- </div>
    </div>
        <div class="col">
            <div class="collapse multi-collapse" id="admin">
                <div class="card card-body text-bg-dark">
                    <?php
                    
                    ?>
                </div>
            </div>
        </div> -->
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>