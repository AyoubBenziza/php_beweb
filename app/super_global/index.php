<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Tuto Super Global</title>
</head>
<body>
    <h1 class="title">Super Global</h1>

    <?php
        //---Erreurs Management---//
        ini_set('display_errors','1');
        ini_set('display_startup_errors','1');
        error_reporting(E_ALL);

        include_once("super_global.php");
    ?>

</body>
</html>