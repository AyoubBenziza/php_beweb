<?php
// Création de la classe Game Engine
class GameEngine{
    private $combattants;

    public function __construct(){
    // J'initialise un tableau vide dans laquelle j'entrerais les combattants
        $this->combattants = array();
    }

    // Cette méthode permet de rajouter plusieurs combattants d'un coup
    // Cette syntaxe (avec utilisation du spread operator...) permet de rentrer plusieurs objets
    public function addCombattants(Personnage ...$combattants){
        // Comment rentrer plusieurs objets à la fois, l'argument $combattants devient un tableau
        // On boucle pour ajouter un combattant individuellement
        foreach($combattants as &$combattant){
            array_push($this->combattants,$combattant);
        }

        var_dump($combattants);
    }

    public function start(){
        while(!$this->fin()){
            $this->tourDeJeu();
            $this->nettoyerMort();
        }
        echo "Le combat est terminé ! Le gagnant est " .$this->getJoueur()->getNom(). " a GAGNE !.</ br>";
    }

    // Cette méthode permet de retourner un id aléatoire  (numéro d'index)
    private function getId(){
        return array_rand($this->combattants,1);
    }

    // Cette méthode permet de retourner le combattant dont l'index a été tiré au sort
    public function getJoueur(){
        $id = $this->getId();
        return $this->combattants[$id];

    }

    // Cette méthode permet de définir comment se passe chaque tour de jeu
    private function tourDeJeu(){
        $combattant1 = $this->getJoueur();
        $combattant2 = $this->getJoueur();
        while($combattant2 === $combattant1){
            $combattant2 = $this->getJoueur();
        }
        $combattant1->attaquer($combattant2);
    }

    // Cette méthode permet d'enlever de l'arène un combattant mort
    // Cette méthode retire du tableau des combattants, le combattant dont le pv est inférieur ou égal à zéro après une attaque
    private function nettoyerMort(){
        foreach($this->combattants as $i => $combattant){
            // Je teste les pv de chacun des combattants
            if ($combattant->getPV() <= 0){
                //Si le combat est mort, je le retire du tableau
                unset($this->combattants[$i]); // destruction d'un objet combattant
                echo "------------> <b>BYE BYE " .$combattant->getNom()."</b><------------";
                echo "</ br>";
                echo "<br>";
            }
        }
    }

    // Cette méthode retourne vrai dès qu'il n'y a plus qu'un seul combattant
    public function fin(){
        //Je rentre la taille du tableau  dans une variable $nbCombattants
        $nbCombattants = count($this->combattants);
        // Je vérifie  si le nombre de combattants est égal à 1, je retourne vrai
        if($nbCombattants===1){
            return true;
        }
    }
}
?>