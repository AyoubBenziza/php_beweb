<?php
require("./Visiteur.php");
//Pour vérifier que j'accède bien au fichier sur mon navigateur
// echo "Connexion Réussie<hr>";

// On créé notre zoo
$jour = new Zoo([new Animal("Lion","Carnivore","Isabelle"),new Animal("Giraffe","Herbivore","Frederic")]);
$jour->addVisiteur("Loïc");
$jour->addVisiteur("Yannick");
$jour->addVisiteur("Yassine");
$jour->addVisiteur("Enzo");
$jour->addVisiteur("Pierre");
$jour->addVisiteur("Renaud");
// Affichage des visiteurs du zoo
echo "<h1>Visiteurs</h1>";
$jour->affichePublic();
echo "<hr>";
echo "<h1>Nombre de Billets</h1>";
echo $jour->nbBillets;
echo "<hr>";
echo "<h1>Livraison d'animaux</h1>";
$jour->livraison([new Animal("Crocodile","Carnivore","Rex"),new Animal("Koala","Herbivore","Baba")]);
echo "<hr>";
echo "<h1>Ouverture du Zoo</h1>";
$jour->ouvrirLesPortes();
// Si vous voulez refaire une ouverture de zoo
// echo "<hr>";
// echo "<h1>Ouverture du Zoo</h1>";
// $jour->ouvrirLesPortes();
?>