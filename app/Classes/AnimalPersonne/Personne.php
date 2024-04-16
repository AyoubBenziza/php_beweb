<?php
include("./Animal.php");
class Personne{
    public $nom="";
    public $prenom="";
    public $age =0;

    // Création de fonction à saluer une autre personne
    public function saluer(Personne $personneSaluer){
        echo $this->nom . " " . $this->prenom . " salue " . $personneSaluer->nom . " " . $personneSaluer->prenom . ".";
        echo "<br>";
    }

    public function comparerAge(Personne $cible){
        if($this->age < $cible->age){
            echo $this->prenom . " est plus jeune que " . $cible->prenom; 
        }else if($this->age > $cible->age){
            echo $this->prenom . " est plus âgé que " . $cible->prenom;
        }else{
            echo $this->prenom . " a le même âge que " . $cible->prenom;
        }
    }

    public function tripote(Animal $animal){
        echo "Celui qui a tripoté l'animal est $this->prenom.".$animal->emettreSon();
    }

}
?>