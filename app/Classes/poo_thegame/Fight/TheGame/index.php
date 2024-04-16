<?php
include("./personnage.php");
include("./main.php");

// Création de Personnages
$humain = new Personnage("Humain",2,6,10);
$orc = new Personnage("Orc",3,4,4);
$elfe = new Personnage("Elfe",1,10,7);

// Lancement de duel entre 2 personnages
$fight = new Main($humain,$orc);
?>