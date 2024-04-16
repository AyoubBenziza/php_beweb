<?php
include("./Personne.php");
// include("./Animal.php");

$moi = new Personne();
$moi->prenom = "Ayoub";
$moi->nom = "Benziza";
$moi->age = 20;

// $yassine = new Personne();
// $yassine->prenom = "Yassine";

// $kyllian = new Personne();
// $kyllian->prenom = "Kyllian";
// $kyllian->nom = "Lambert";
// $kyllian->age = 16;

// $moi->saluer($yassine);
// $moi->comparerAge($kyllian);



$chien = new Animal("Chien",4,"Brun","OUAF OUAF","marche");
// $chien->seDeplacer();

$moi->tripote($chien);

// var_dump($chien);
?>