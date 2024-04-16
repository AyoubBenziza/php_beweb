<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <title>Session</title>
</head>
<body>
    <?php 
        session_start();
    ?>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        <span class="badge bg-secondary">Session: <?= (isset($_SESSION["username"]) ? $_SESSION["username"] : $_SESSION["username"]="Non connecté");?></span>
    </a>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <?php
            echo "<p>Les données de COOKIE: " . "</p>";
            var_dump($_COOKIE);
            echo "<hr><p>Les données de SESSION: " . "</p>";
            var_dump($_SESSION);

            ?>
        </div>
    </div>
    <a href="http://localhost/Request/index.php" class="lien">Accéder à la partie FRONT</a>
    <script src="./bootstrap.min.js"></script>
</body>
</html>