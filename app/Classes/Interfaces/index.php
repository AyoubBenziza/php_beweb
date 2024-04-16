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
    require("./interfaces.php");
    ?>
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#interface" role="button" aria-expanded="false" aria-controls="interface">
            Interfaces
        </a>
    </p>
    <div class="collapse" id="interface">
        <div class="card card-body text-bg-dark">
            <?php
            $template = new WorkingTemplate();
            $template->setVariable("name","Ayoub");
            $template->setVariable("age",20);
            echo $template->getHtml("Bonjour {name}, tu as {age} ans.");
            ?>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>