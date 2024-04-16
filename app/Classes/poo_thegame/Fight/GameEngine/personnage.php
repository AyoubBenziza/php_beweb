<?php
// Ma classe personnage abstraite car elle me servira d'exemplaire pour faire les types de combattants
abstract class Personnage{
public $id = 0;
public $nom="";
public $force=0;
public $pv=0;
public $endurance=0;
//(optionnel) Logo de personnage pour plus de flow yeah
public $logo;

    function __construct($nom){
        $this->nom = $nom;
    }

    // Méthode pour changer des stats d'un personnage
    public function set($force,$pv,$endurance){
        $this->force = $force;
        $this->pv = $pv;
        $this->endurance = $endurance;
    }

    // Méthode d'attaquer un adversaire
    public function attack(Personnage $cible){
        $cible->pv-=$this->force;
        // Si les pv tombent inférieurs à 0, on les affiche à 0;
        if($cible->pv<0){
            $cible->pv=0;
        }
        echo "$this->nom(".$this->logo.get_class($this).") a infligé $this->force de dégâts au joueur $cible->nom<br>Le joueur $cible->nom(".$cible->logo.get_class($cible).") a $cible->pv pv restants.<br><br>";
    }
}

// Ma classe Humaine qui va hériter de ma classe Personnage
class Humain extends Personnage{
    public function __construct($nom){
        parent::__construct($nom);
        $this->force=2;
        $this->pv=6;
        $this->endurance=2;
        $this->logo = "\u{1F46E}";
    }
}

// Ma classe Orc qui va hériter de ma classe Personnage
class Orc extends Personnage{
    public function __construct($nom){
        parent::__construct($nom);
        $this->force=3;
        $this->pv=4;
        $this->endurance=1;
        $this->logo = "\u{1F479}";
    }
}

// Ma classe Elfe qui va hériter de ma classe Personnage
class Elfe extends Personnage{
    public function __construct($nom){
        parent::__construct($nom);
        $this->force=1;
        $this->pv=10;
        $this->endurance=3;
        $this->logo = "\u{1F9DD}";
    }
}
?>