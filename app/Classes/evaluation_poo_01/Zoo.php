<?php
require("./Animal.php");
class Zoo extends Visiteur{
    // Liste de visiteurs
    public $visiteurs =[];
    // Nombre de billets
    public $nbBillets=0;
    // Liste d'animaux
    public $animaux=[];
    // Liste de passants(visiteurs ayant fini leurs parcours)
    public $passants=[];

    public function __construct($animaux){
        $this->animaux = $animaux;
    }
    
    // Méthode qui vérifie si le quota de billets y est ou non
    public function benefice(){
        return (($this->nbBillets>=6) ? true : false);
    }

    // Méthode d'ouverture du zoo
    public function ouvrirLesPortes(){
        if($this->benefice()===true){
            echo "Le zoo est ouvert.<br>";
            // Je réinitialise le nombre de passants à chaque nouvelle ouverture de zoo
            $this->passants = [];
            // Pour chaque visiteur, il va effectuer son parcours
            foreach($this->visiteurs as &$value){
                $this->parcours($value);
            }
            echo "Le zoo ferme ses portes.<br>";
        }else{
            echo "Pas assez de billets vendus. Le zoo n'ouvrira pas aujourd'hui.<br>";
        }
    }

    // Méthode parcours du zoo
    public function parcours(Visiteur $visiteur){
        // Annonce du parcours débuté
        echo "$visiteur->nom commence le parcours.<br>";
        // Boucle d'animaux à visiter
        for($long=0;$long<count($this->animaux);$long++){
            $this->animaux[$long]->faireLeShow();
        }
        // Annonce du parcours fini
        echo "$visiteur->nom a terminé le parcours.<br><br>";
        // On ajoute donc notre visiteur aux passants
        $this->passants[] = $visiteur;
        // Conditions de naissance
        if(count($this->passants)===count($this->visiteurs)/2){
            $this->animaux[1]->donnerNaissance();
        }
        if(count($this->passants)===count($this->visiteurs)){
            $this->animaux[0]->donnerNaissance();
        }
    }

    // Méthode de livraison d'animaux
    public function livraison($cargaison){
        // Pour chaque animal dans la livraison, on va l'ajouter à notre liste d'animaux
        for($long=0;$long<count($cargaison);$long++){
            $this->animaux[] = $cargaison[$long];
        }
        echo "Une livraison de " . count($cargaison) . " animaux a été effectuée.";
    }

    // Méthode d'ajout de visiteur
    public function addVisiteur($visiteur){
        $this->visiteurs[] = new Visiteur($visiteur);
        // A chaque ajout de visiteur on appelle la méthode vendreBillet()
        $this->vendreBillet();
    }

    // Méthode de vente de billets
    public function vendreBillet(){
        $this->nbBillets = $this->nbBillets + 1;
    }

    // (optionnel) Si on veut un affichage des visiteurs
    public function affichePublic(){
        var_dump($this->visiteurs);
    }

    // Méthode naissance
    public function naissance(){
        echo "Un nouvel animal est né dans le Zoo<br>";
    }
}

?>