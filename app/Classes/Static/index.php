<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/class.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Static</title>
</head>
<body>
    <h1><span class="badge bg-dark">Connexion Réussie</span></h1>

    <?php
    //---Erreurs Management---//
    ini_set('display_errors','1');
    ini_set('display_startup_errors','1');
    error_reporting(E_ALL);

    // Intégration de notre classe 
    require("./json.class.php");
    ?>
    <p class="listButton">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#json" role="button" aria-expanded="false" aria-controls="json">
            JSON
        </a>
        <a class="btn btn-success" data-bs-toggle="collapse" href="#math" role="button" aria-expanded="false" aria-controls="math">
            MATH
        </a>
    </p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="json">
                <div class="card card-body text-bg-dark">
                    <?php
                    $tab = ["Int"=>18, "String"=>"Bonjour","Float"=>1.99,"Boolean"=>true];

                    //Transformer en chaîne de caractères(JSON stringify)
                    $str_tab = Json::stringify($tab);
                    echo "<h2><span class='badge bg-secondary'>Le tableau stringify</span></h2>",$str_tab;

                    //Décoder le JSON stringify
                    $parse_tab = Json::parse($str_tab);
                    echo "<hr><h2><span class='badge bg-secondary'>Le code parse</span></h2>";
                    var_dump($parse_tab);
                    ?>
                </div>
            </div>
        </div>
    </div>
        <div class="col">
            <div class="collapse multi-collapse" id="math">
                <div class="card card-body text-bg-dark">
                    <?php
                    //Aléatoire d'une intervalle de 2 nombres
                    $random = Math::random(2,56);
                    echo "<h2><span class='badge bg-secondary'>Random</span></h2><h5>Le chiffre retourné est: ".$random."</p>";

                    //Arrondi Inférieur
                    $floor = Math::floor(56.7);
                    echo "<hr><h2><span class='badge bg-secondary'>Floor</span></h2><h5>Le chiffre retourné est: ".$floor."</p>";

                    //Arrondi Supérieur
                    $ceil_float = Math::ceil(2.56);
                    echo "<hr><h2><span class='badge bg-secondary'>Ceil</span></h2><h5>Le chiffre retourné est: ".$ceil_float."</p>";
                    ?>
                </div>
            </div>
        </div>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>