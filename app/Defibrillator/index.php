<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Defibrillators</title>
</head>
<body>
    <?php
    include("defibrillators.php");
    include("users.php");

    //---Erreurs Management---//
    ini_set('display_errors','1');
    ini_set('display_startup_errors','1');
    error_reporting(E_ALL);

    $tab_defibrillators = [];

    for($i=0;$i<count($defibrillators);$i++){
        array_push($tab_defibrillators,explode(";", str_replace(",",".",$defibrillators[$i])));
    }

    // var_dump($users);


    $donneesLonA = [];
    $donneesLatA = [];
    $donneesLonB = [];
    $donneesLatB = [];

    for($j=0;$j<count($tab_defibrillators);$j++){
        array_push($donneesLonA, floatval($tab_defibrillators[$j][4]));
        array_push($donneesLatA, floatval($tab_defibrillators[$j][5]));
    }

    for($k=0;$k<count($users);$k++){
        array_push($donneesLonB, $users[$k]["lon_deg"]);
        array_push($donneesLatB, $users[$k]["lat_deg"]);
    }

    // var_dump($donneesLonA);
    // var_dump($donneesLatA);
    // var_dump($donneesLonB);
    // var_dump($donneesLatB);

    $resultat = [];
    $resultatCalcul = [];
    for($h=0;$h<count($donneesLatB);$h++){
        for($m=0;$m<count($tab_defibrillators);$m++){
            $x = (deg2rad($donneesLonB[$h])-deg2rad($donneesLonA[$m]))*cos((deg2rad($donneesLatA[$m])+deg2rad($donneesLatB[$h]))/2);
            $y = (deg2rad($donneesLatA[$m])-deg2rad($donneesLatB[$h]));
            $d = round(sqrt(($x**2)+($y**2))*6371*1000);
            array_push($resultatCalcul,$d);
        }
        array_push($resultat, min($resultatCalcul));
        $resultatCalcul = [];
    }

    var_dump($resultat);
    
    ?>
</body>
</html>