<?php

// Partie Classe
abstract class Personne{
    protected $nom="";
    protected $prenom="";

    function __construct($prenom,$nom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}

class Client extends Personne{
    public $adresse;
    // Construct de la classe Client
    function __construct($prenom,$nom,$adresse){
        //Importation du construct de la classe parent
        parent::__construct($prenom,$nom);

        $this->adresse= $adresse;
    }

    public function setCoord(){
        echo "$this->prenom $this->nom habite à $this->adresse";
    }
}

class Electeur extends Personne{
    public $bureau_de_vote="";
    public $vote=false;
    //Construct de la classe Electeur
    function __construct($prenom,$nom,$bureau_de_vote){
        //Importation du construct de la classe parent
        parent::__construct($prenom,$nom);

        $this->bureau_de_vote= $bureau_de_vote;
    }
    // Voté oui ou non
    public function avoter(){
        $this->vote = true;
    }

    // Affiche si oui ou non on a voté et si oui à telle adresse
    public function annonce(){
        if($this->vote){
            echo "$this->prenom $this->nom a voté à $this->bureau_de_vote.";
        }else{
            echo "$this->prenom $this->nom n'a pas voté.";
        }
    }
}

//Partie Création d'objets

//Personne nom prénom adresse
$profil = new Client("Gaetan","BouffeTout","Rue Inconnu");
$profil->setCoord();
echo "<hr>";
// Electeur nom prénom adresse de bureau de vote
$electeur = new Electeur("Fred","Salariel","Mairie de Montpellier");
// Pour valider le vote "true"
$electeur->avoter();
// Affiche si oui ou non on a voté et si oui à telle adresse
$electeur->annonce();
?>