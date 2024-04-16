<?php
class Personnage{
    public $nom="";
    public $force=0;
    public $pv=0;
    public $endurance=0;

    public function __construct($nom,$force,$pv,$endurance){
        $this->nom=$nom;
        $this->force=$force;
        $this->pv=$pv;
        $this->endurance=$endurance;
    }

    //Fonction pour attaquer un adversaire
    public function attack($cible){
        $cible->pv-=$this->force;
        echo $this->nom ." a infligé " . $this->force . " de dégâts au joueur " . $cible->nom.".<br>Le joueur " . $cible->nom ." a " . $cible->pv . " pv restants.<br><br>";
    }
}
?>