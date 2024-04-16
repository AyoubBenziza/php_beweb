<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Variables</title>
</head>
<body>
    <h1 class="tc-orange">Variables</h1>

    <?php
        $num = 27; //Integer : 27
        $flt = 1.09; //Float : 1.09
        $bln = true; //Boolean : true

        echo "<p>Integer: $num </p>";
        echo "<p>Float: $flt</p>";
        echo "<p>Boolean:]". ($bln ? "True" : "False") ."[</p>";

        var_dump($bln); // Display variable informations

        echo "<p>Type of num: " . gettype($num) . "</p>"; // Le type de la variable
    ?>

    <script>
        console.log("Je suis en Javascript");
    </script>

</body>
</html>