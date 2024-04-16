<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Tuto PHP</title>
</head>
<body>
    <h1 class="tc-orange">Tuto PHP</h1>

    <?php
        //---Erreurs Management---//
        ini_set('display_errors','1');
        ini_set('display_startup_errors','1');
        error_reporting(E_ALL);

        //---Tuto---//
        $first = "(avec une variable)";
        echo nl2br("<p>Je suis\nen</p>");
        // echo "<p>PHP<br>" . $first . "</p>";
        echo "<p>PHP<br>$first<br>Double guillemet</p>";

        $num = 27; //Integer : 27
        $flt = 1.09; //Float : 1.09
        $bln = true; //Boolean : true

        echo "<p>Integer: $num </p>";
        echo "<p>Float: $flt</p>";
        echo "<p>Boolean:]". ($bln ? "True" : "False") ."[</p>";

        var_dump($bln); // Display variable informations

        echo "<p>Type of num: " . gettype($num) . "</p>"; // Le type de la variable
        
        //---If Else---//
        if($bln){
            echo "<p>My boolean is true</p>";
        } else {
            echo "<p>My boolean is false</p>";
        }

        if($num > 30){
            echo "<p>My number is greather than 30</p>";
        } else if($num <30){
            echo "<p>My number is less than 30</p>";
        } else {
            echo "<p>My number is equal to 30</p>";
        }

        //---Switch case---//
        switch ($num) {
            case 0:
                echo "The number is equal to 0";
                break;
            case 1:
                echo "The number is equal to 1";
                break;
            case 2:
                echo "The number is equal to 2";
                break;
        }

        //---Boucle---//
        // for($i=0; $i < 10; $i++) {
        //     echo "<p class='tc-orange'>Value of i: $i</p>";
        // }

        $w = 0;
        while($w<10){
            echo "<p>Value of w: $w</p>";
            $w++;
        }

        do{
            echo "<p>Value of w: $w</p>";
        } while($w<10);

        // String
        $mot = "Sucreries";
        // Calculer la longueur d'une chaîne de caractères
        echo "<p>La longueur du mot $mot est de " . strlen($mot) . "</p>";

        //---Array---//
        // $arr = array(1,2,3,4);
        // // ou
        // $tableau = [0,1,2,"trois",4,"cinq"];
        // // Calculer la longueur d'un mot
        // echo "<p>La longueur du tableau est de " . count($tableau) . "</p>";

        // var_dump($tableau);
        // print_r($tableau); // Affiche lisiblement pour un humain les détails de la variable

        // $arry = array(1,2,4=>7,4);
        // var_dump($arry);

        // $asso = array(
        //     "a" => "Value A",
        //     "b" => "Value B"
        // );

        // var_dump($asso);

        // $assy = [
        //     "a" => 18,
        //     "b" => 36
        // ];

        // var_dump($assy);
        // $OwO=array(1,2,3,4,5);
        // foreach($OwO as $v){
        //     echo "<p> Value of OwO[] (foreach): $v</p>";
        // }

        // foreach($OwO as $k => $v){
        //     echo "<p> Value of OwO[$k] (foreach): $v</p>";
        // }

        $a = 9;
        $b = 18;
        // list($a, $b) = [$b,$a];
        // echo "<p>A = $a : B = $b</p>";

        // function sum($a,$b){
        function sum(...$args){
            $res = 0;
            foreach($args as $v) {
                $res += $v;
            }
            return $res;
        }

        $result = sum(2,8,15,5);
        echo "<p>Sum = $result</p>";
        
        $ar = array(2,8,15,5);
        echo "<p>Sum = " . sum(...$ar) . "</p>";
    ?>

    <h2><?=$result?></h2>
    <!-- ?= signifie ? echo -->

    <script>
        console.log("Je suis en Javascript");
        let phpValue = "<?= $result?>";
        console.log(phpValue);
    </script>

</body>
</html>