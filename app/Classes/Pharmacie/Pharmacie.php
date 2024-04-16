<?php
require("./Medicament.php");
require("./Client.php");
class Pharmacie{
    public $clients=[];
    public $medicaments = [];

    public function __construct($listeClients,$listeMedicaments){
        $this->clients = $listeClients;
        $this->medicaments = $listeMedicaments;
    }

    // Fonction à ajouter un client dans la base de données
    public function addClient($nom,$credit){
        $this->clients[] = new Client($nom,$credit);
    }

    // Fonction à ajouter un médicament dans la base de données
    public function addMedicament($nom,$prix,$stock){
        $this->medicaments[] = new Medicament($nom,$prix,$stock);
    }

    //Fonction à afficher la liste des clients et médicaments de la pharmacie
    public function affichage(){
        echo "<h1>Liste des clients</h1><hr>";
        foreach($this->clients as &$client){
            echo "Client: $client->nom";
            echo "<br>";
            echo "Crédit: $client->credit";
            echo "<hr>";
        }
        echo "<h1>Liste des médicaments</h1><hr>";
        foreach($this->medicaments as &$medicament){
            echo "Medicament: $medicament->nom";
            echo "<br>";
            echo "Stock: $medicament->stock";
            echo "<hr>";
        }
    }

    // Fonction à ajouter un stock
    public function approvisionnement($nom,$stock){
        $liste = $this->medicaments;
        $liste[array_search($nom,$liste)]->stock += $stock;
    }

    public function lireMedicament($nom){
        $verif = false;
        $liste = $this->medicaments;
        for($long=0;$long<count($liste);$long++){
            if($liste[$long]->nom===$nom){
                $verif=true;
                $medicament = $liste[$long];
            }
        }
        if($verif===true){
            return $medicament;
        }else{
            return false;
        }
    }

    public function lireClient($nom){
        $verif = false;
        $liste = $this->clients;
        for($long=0;$long<count($liste);$long++){
            if($liste[$long]->nom===$nom){
                $verif=true;
                $client = $liste[$long];
            }
        }
        if($verif===true){
            return $client;
        }else{
            return false;
        }
    }

    public function achat($nom,$quantite,$nomClient){
        // echo "$this->nom n'arrive pas à payer SA RACEEEEEE!";
        if(self::lireMedicament($nom)===false){
            echo "Pas de médicament à ce nom trouvé dans notre base de données.";
        }elseif(self::lireClient($nomClient)===false){
            echo "Pas de clients à ce nom trouvé dans notre base de données.";
        }else{
            $medicament = self::lireMedicament($nom);
            $client = self::lireClient($nomClient);
            $montant = $medicament->prix * $quantite;
            $client->credit += $montant;
            $medicament->stock -= $quantite;
            echo "<b>$client->nom</b> a acheté $quantite $medicament->nom. Son crédit est actuellement a <b>".$client->credit."€</b>.";
        }
    }

    public function quitter(){
        echo "Programme terminé!";
    }
}
?>