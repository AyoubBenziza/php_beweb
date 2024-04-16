<?php
// On récupère notre fichier personnage pour ajouter des combattants
require("./personnage.php");
class GameEngine{
    // Etat du jeu lancé ou pas lancé
    public $game = false;
    // Notre arène de combat
    public $arene=[];

    // Méthode pour ajouter un combattant à la partie
    public function addCombattant(Personnage $joueur){
        // On vérifie bien que notre partie est pas déjà lancé (ça serait quand meme bête :/)
        if($this->game===false){
            // On détermine le numéro du joueur selon à quelle position on l'insère dans la partie
            $joueur->id = count($this->arene) + 1;
            // Puis on met le joueur dans notre arène de combat
            $this->arene[]=$joueur;
        }else{
            echo "La Game est déjà lancé. Vous ne pouvez pas rajouter de combattants pendant la partie.";
        }
    }

    // Méthode pour Start The Game
    public function start(){
        // On vérifie bien qu'il y a au moins 2 personnages pour combattre (ça serait bête d'être tout seul)
        if(count($this->arene)>=2){
            $this->game = true;
            // On boucle tant que la game continue et qu'il reste plus qu'un joueur dans l'arène de combat
            while($this->game === true && count($this->arene)>1){
                // On effectue notre tour de jeu
                $this->tourDeJeu();
            }
            // On vérifie s'il reste qu'un seul combattant sinon ça veut dire qu'il y a match nul
            if(count($this->arene)===1){
                echo "Le joueur restant " . $this->arene[array_rand($this->arene,1)]->nom . " a gagné la partie!!!<br><br>";
            }else{
                echo "Aucun Survivant tout le monde est mort(zut)";
            }
        }else{
            echo "La Game ne peut être lancé. Pas assez de participants.";
        }
    }

    // Méthode qui récupère un adversaire aléatoirement pour le joueur en argument
    public function getAdversaire(Personnage $joueur){
        //Tableau des adversaires
        $arrayRandom = [];
        for($i=0;$i<count($this->arene);$i++){
            if($this->arene[$i]!==$joueur){
                $arrayRandom[] = $this->arene[$i];
            }
        }
        return $arrayRandom[array_rand($arrayRandom,1)];
    }

    // Méthode qui va annoncer la mort du joueur ainsi que le retrait de ce dernier dans l'arène de combat
    public function retournerMort($joueur){
        echo "Le joueur " . $joueur->nom . " a été vaincu!!!<br><br>";
        $index = array_search($joueur, $this->arene);
        unset($this->arene[$index]);
        $this->arene = array_values($this->arene);
    }

    // Méthode qui effectue le tour de jeu pour chaque personnage présent encore dans l'arène de combat (ça serait embêtant du aléatoire et qu'il n'y a pas tous les joueurs qui ont eu la chance de jouer :/)
    public function tourDeJeu(){
        // Pour chaque joueur présent dans l'arène
        for($a=0;$a<count($this->arene);$a++){
            $joueur=$this->arene[$a];
            // On sélectionne l'adversaire
            $adversaire = $this->getAdversaire($joueur);
            // Puis le joueur attaque celui-ci
            $joueur->attack($adversaire);
            // Si les pv de celui-ci tombent à 0 alors on lance notre Méthode retournerMort
            if($adversaire->pv<=0){
                $this->retournerMort($adversaire);
            }
        }
    }
}
// (Optionnel) C'est pour moi afin de vérifier que la liaison entre les fichiers est bien faite
// echo "Connexion Réussie: Pas d'erreurs ça Méthodene<hr>";
?>