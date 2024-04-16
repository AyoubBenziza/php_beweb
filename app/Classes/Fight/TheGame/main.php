<?php
// Je suis passé par une classe contrairement à l'entièreté de la classe apparemment mais ça marche quand même =)
class Main{
    // Notre arène
    private $domeDuTonnerre=[];
    public function __construct($joueur1,$joueur2){
        // On push nos 2 joueurs dans l'arène
        $this->domeDuTonnerre = [$joueur1,$joueur2];

        // (Décoration) On affiche le combat de qui versus qui
        echo "<h1>" .$this->domeDuTonnerre[0]->nom ." VS ". $this->domeDuTonnerre[1]->nom . "</h1>";

        // Boucle while où tant qu'aucun crève on veut voir du SANG couler!!!
        while($this->domeDuTonnerre[0]->pv>0||$this->domeDuTonnerre[1]->pv>0){
            // Première attaque effectuée: Joueur 1 attaque Joueur 2
            $this->domeDuTonnerre[0]->attack($this->domeDuTonnerre[1]);
            // Si Joueur 2 est mort, on arrête le combat qui est la boucle
            if($this->domeDuTonnerre[1]->pv<=0){
                echo "Le joueur " . $this->domeDuTonnerre[1]->nom . "a été vaincu!!!<br>Le joueur " . $this->domeDuTonnerre[0]->nom . " a gagné!!!<br>";
                break;
            }else{
                // Sinon on reprend avec le Joueur 2 qui riposte
                $this->domeDuTonnerre[1]->attack($this->domeDuTonnerre[0]);
            }
        }

        // Condition en dehors du while pour vérifier si c'est le Joueur 1 qui a perdu alors on affiche le message pour ce cas là sinon rien car ça aura déjà été fait au dessus
        if($this->domeDuTonnerre[0]->pv<=0){
                echo "Le joueur " . $this->domeDuTonnerre[0]->nom . "a été vaincu!!!<br>Le joueur " . $this->domeDuTonnerre[1]->nom . " a gagné!!!<br>";
        }
    }
}
?>