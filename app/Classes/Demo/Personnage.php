<?php

  class Personnage{
      // Passage des propriétes en protected accessible aux enfants
      protected  $force;
      protected  $pv;
      protected  $endurance;
      protected  $nom;

      //Pour récupérer le nom
      public function getNom(){
        return $this->nom;
      }

      //Pour récupérer les pv
      public function getPV(){
        return $this->pv;
      }

      //function attaquer correction 1
        
    /*  public function attaquer(Personnage $cible){
  
        echo $this->nom.' Attaque '.$cible->nom.'</br>';
        $cible->pv-=$this->force;
        echo 'Le pv de '.$cible->nom.' apres l\'attaque '.$cible->pv.'</br>';

      }*/

      //function attaquer correction 2

      public function attaquer(Personnage $cible){
        echo $this->nom.' attaque '.$cible->nom.'</br>';
        $this->perte_de_vie($cible);
      }
       
      public function perte_de_vie($cible){
         $cible->pv=$cible->pv-1;
         echo "Les PV restants de $cible->nom sont à $cible->pv.";
        echo '</br>';
        echo '<br>';
        //Optimisation du code ligne26
       // echo $cible->pv-=1;
      }
  }