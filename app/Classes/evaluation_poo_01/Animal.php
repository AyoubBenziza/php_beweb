<?php
class Animal extends Zoo{
    public $categorie;
    public $type;
    public $nom;

    // On met une valeur prédéfinie pour le nom car un animal du zoo peut ne pas avoir de nom
    public function __construct($type,$categorie,$nom=""){
        $this->categorie = $categorie;
        $this->type = $type;
        $this->nom = $nom;
    }

    // Méthode qui affiche selon s'il y a un nom ou pas l'animal qui fait son show
    public function faireLeShow(){
        if($this->nom===""){
            echo "cet animal $this->categorie qui est un $this->type<br>";
        }else{
            echo "cet animal $this->categorie qui est un $this->type et qui s'appelle $this->nom<br>";
        }
    }

    // Méthode donnerNaissance qui créé un nouvel Animal bébé né du zoo (donc pas de nom)
    public function donnerNaissance(){
            $this->naissance();
            $nouveauNe = new Animal($this->type,$this->categorie);
            echo "Un bébé $nouveauNe->type,$this->categorie vient d'être mis bas.<br><br>";
    }
}
?>