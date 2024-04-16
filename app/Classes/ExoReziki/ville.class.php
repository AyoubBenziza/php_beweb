<?php
class Ville{
    public $nom="";
    public $departement="";

    public function getLocation(){
        return "La ville $this->nom est dans le département $this->departement <br>";
    }
}

class VilleC{
    private $nom="";
    private $departement="";

    public function __construct($nom,$departement){
        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function getLocation(){
        return "La ville $this->nom est dans le département $this->departement.";
    }
}

class Personne{
    private $nom="";
    private $prenom="";
    private $adresse="";

    function __construct($prenom,$nom,$adresse){
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->adresse=$adresse;
    }

    function __destruct(){
        echo "La personne s'appelle $this->prenom $this->nom à $this->adresse. Le construct est détruit.<br>";
    }

    function setAdresse($value){
        $this->adresse = $value;
    }

    function getPersonne(){
        return "La personne s'appelle $this->prenom $this->nom à $this->adresse.<br>";
    }
}
?>