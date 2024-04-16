<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>String</title>
</head>
<body>
    <h1 class="tc-orange">String</h1>

    <?php
        //---String---//
        $mot = "Sucreries";
        // Calculer la longueur d'une chaîne de caractères
        echo "<p>La longueur du mot $mot est de " . strlen($mot) . "</p>";
        // Vérifie si le contenu souhaité est présent dans la chaîne de caractère indiquée
        echo "<p>Le radical Sucre est " . (str_contains($mot,'Sucre') ? "True" : "False") . " dans $mot</p>";
        // Shuffle d'une chaîne de caractères
        echo "<p>Le shuffle de $mot donne: " . str_shuffle($mot) . "</p>";
        // Renvoie la position du cactère soumis dans la chaîne de caractère(si n'y est pas renvoie false)
        echo "<p>La position du caractère c dans $mot est " . strpos($mot,'c') . "</p>";
        // Remplace le mot par lui-même sans les voyelles(car on met rien en 2ème argument)
        $voyelle = array("a","e","i","o","u");
        echo str_replace($voyelle, "",$mot);
        // Fonction Match similaire à Switch case mais agit sur des expressions ternaires et compare avec === et non ==
        $food = 'cake';

        $return_value = match ($food) {
        'apple' => 'This food is an apple',
        'bar' => 'This food is a bar',
        'cake' => 'This food is a cake',
        };

        var_dump($return_value);
    ?>

    <script>
        console.log("Je suis en Javascript");
    </script>

</body>
</html>