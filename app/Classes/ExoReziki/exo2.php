<?php
require("./ville.class.php");
$villeC = new VilleC("Montpellier","Hérault");
var_dump($villeC);
echo $villeC->getLocation();
?>