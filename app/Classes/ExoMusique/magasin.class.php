<?php


class Instruments{

    // Properties
    protected $nom="";
    protected $prixAchat=0;
    protected $prixVente=0;

    // Magic Methods 
    function __construct($nom,$prixAchat,$prixVente){
        // echo "<p>Construct object class: ",__CLASS__,"</p>";
        $this->nom=$nom;
        $this->prixAchat=$prixAchat;
        $this->prixVente=$prixVente;
    }

}

class InstrumentsACordes{
    private $longueur = 0;
    private $largeur = 0;

    function set_longueur($value){
        $this->longueur=$value;
    }
    function get_longueur(){return $this->longueur;}

    function set_largeur(){
        $this->largeur=$value;
    }
    function get_largeur(){return $this->largeur;}
}

class Piano extends Instruments{
    private $nb_touches = 88;
}

class Numerique extends Piano{
    private $toucher_lourd = true;
    private $rateEchantillon = 1;

    function set_toucher_lourd($value){
        $this->toucher_lourd=$value;
    }
    function get_toucher_lourd(){return $this->toucher_lourd;}

    function set_rateEchantillon($value){
        if($value>=1 && $value<=3){
            $this->rateEchantillon=$value;
        }
    }
    function get_Echantillon(){return $this->rateEchantillon;}

    public function affiche() {
        var_dump(get_object_vars($this));
    }
}

class Droits extends Piano{
    private $cordes = "";
    private $silencieux = true;

    function set_cordes($value){
        $this->cordes=$value;
    }
    function get_cordes(){return $this->cordes;}

    function set_silencieux($value){
        $this->silencieux=$value;
    }
    function get_silencieux(){return $this->silencieux;}
}

class Queue extends Piano{
    private $taille = "";

    function set_taille($value){
        $this->taille=$value;
    }
    function get_taille(){return $this->taille;}
}

class GuitareAcous extends Instruments{
    private $main = "";
    private $tirant = 1;

    function set_main($value){
        $this->main=$value;
    }
    function get_main(){return $this->main;}

    function set_tirant($value){
        if($value>=1 && $value<=3){
            $this->tirant=$value;
        }
    }

    function get_tirant(){return $this->tirant;}
}

class GuitareElect extends Instruments{
    private $amplificateur = true;
    private $pedale = true;

    function set_ampli($value){
        $this->amplificateur=$value;
    }
    function get_ampli(){return $this->amplificateur;}

    function set_pedale($value){
        $this->pedale=$value;
    }
    function get_pedale(){return $this->pedale;}
}

class InstrumentsAVents extends Instruments{
}

class HautBois extends Instruments{
    private $trilles = true;
    private $type = "anche double";

    function set_trilles($value){
        $this->trilles=$value;
    }
    function get_trilles(){return $this->trilles;}
}

class Clarinette extends Instruments{
    private $utilisation = "";
    private $type = "anche simple";

    function set_use($value){
        $this->utilisation=$value;
    }
    function get_use(){return $this->utilisation;}
}

class FluteTravers extends Instruments{
    private $trilles = true;
    private $rateAcous=1;
    private $type = "biseau";

    function set_trilles($value){
        $this->trilles=$value;
    }
    function get_trilles(){return $this->trilles;}

    function set_rateAcous($value){
        if($value>=1 && $value<=5){
            $this->rateAcous=$value;
        }
    }

    function get_rateAcous(){return $this->rateAcous;}
}


?>