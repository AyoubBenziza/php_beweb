<?php
require("./Pharmacie.php");

echo "Connexion Réussie<hr>";

$moi = new Client("Ayoub",400);
$clement = new Client("Clement",-20);

$doliprane = new Medicament("Doliprane",5.60,15);
$deferalgan = new Medicament("Deferalgan",3.85,34);

$listeClients = [$moi,$clement];
$listeMedicaments = [$doliprane,$deferalgan];

$pharmacie = new Pharmacie($listeClients,$listeMedicaments);
// $pharmacie->addClient("Ayoub",400);
// $pharmacie->addClient("Clement",-20);

// $pharmacie->addMedicament("Doliprane",4.50,15);

$pharmacie->approvisionnement("Doliprane",5);

$pharmacie->affichage();
$pharmacie->achat("Doliprane",10,"Byoub");
?>