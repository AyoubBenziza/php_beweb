<?php
class Medicament{
    public $nom="";
    public $prix;
    public $stock=0;

    public function __construct($nom,$prix,$stock){
        $this->nom = $nom;
        $this->prix = $prix;
        $this->stock = $stock;
    }

}
?>