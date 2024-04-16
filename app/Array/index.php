<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Array</title>
</head>
<body>
    <h1 class="tc-orange">Array</h1>

    <?php
        //---Array---//
        $arr = array(1,2,3,4);
        // ou
        $tableau = [0,1,2,"trois",4,"cinq"];
        // Calculer la longueur d'un mot
        echo "<p>La longueur du tableau est de " . count($tableau) . "</p>";

        var_dump($tableau);
        print_r($tableau); // Affiche lisiblement pour un humain les détails de la variable

        $arry = array(1,2,4=>7,4);
        var_dump($arry);

        $asso = array(
            "a" => "Value A",
            "b" => "Value B"
        );

        var_dump($asso);

        $assy = [
            "a" => 18,
            "b" => 36
        ];

        var_dump($assy);
        $OwO=array(1,2,3,4,5);
        foreach($OwO as $v){
            echo "<p> Value of OwO[] (foreach): $v</p>";
        }

        foreach($OwO as $k => $v){
            echo "<p> Value of OwO[$k] (foreach): $v</p>";
        }

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