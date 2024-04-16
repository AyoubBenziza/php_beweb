<?php
require("./ville.class.php");
$ville = new Ville();
$ville->nom="Montpellier";
$ville->departement = "Herault";
var_dump($ville);
echo $ville->getLocation();
?>