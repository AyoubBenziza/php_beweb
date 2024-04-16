<?php
class TypeDAnimal{
    public $nom;
    public $deplacement;

    function __construct($nom,$deplacement){
        $this->nom;
        $this->deplacement;
    }
}

class Animal extends TypeDAnimal{
    public $nombreDePattes;
    public $couleur;
    public $son;

    public function __construct($typeDAnimal,$nbPattes,$color,$son,$deplacement){
        parent::__construct($typeDAnimal,$deplacement);
        $this->nombreDePattes = $nbPattes;
        $this->couleur = $color;
        $this->son = $son;
    }

    public function seDeplacer(){
        echo "le TypeDAnimal " . $this->deplacement;
    }

    public function emettreSon(){
        echo "Le bruit est $this->son.";
    }
}
?>