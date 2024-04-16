<?php
include("./gameEngine.php");

// Nos Valeureux Combattants ici présent
$joueur1 = new Humain("Ayoub");
$joueur2 = new Orc("Loïc");
$joueur3 = new Elfe("Elsa");
$joueur4 = new Elfe("Laurence");
$joueur5 = new Orc("Wahid");

// On lance le moteur de jeu
$game = new GameEngine();

// On ajoute nos combattants dans la partie
$game->addCombattant($joueur1);
$game->addCombattant($joueur2);
$game->addCombattant($joueur3);
$game->addCombattant($joueur4);
$game->addCombattant($joueur5);

// Pour afficher les participants
echo "<h3>Tableau de Participants</h3>";
var_dump($game->arene);

// Start The Game!!!
echo "<hr><h3>Fight!!!</h3>";
$game->start();
?>