<?php

require('Personnage.php');
require_once('Orc.php');
require_once('Humain.php');
require_once('Elf.php');
require_once('GameEngine.php');

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$Orc= new Orc('Orco');
$Humain= new Humain('Yassine');
$Elf= new Elf('Wahid');
$Orc1 = new Orc("Clément");
$Humain1 = new Humain('Kyllian');
$Elf1 = new Elf('Kayane');

// var_dump($Orc);




// Exercice 1 Correction 1

/*function Duel(Personnage $perso1, Personnage $perso2){
   
    // je boucle tant que les pv sont superieur à 0
    // ils attaquent chacun leurs tours avec methode attaquer() dans Personnage
      
     while($perso1->pv>0 && $perso2->pv>0){
        // j'effectue un tirage aleatoire pour savoir qui attaque en premier
        // je rentre le resultat dans une variable
        $domeDuTonnerre= rand(0,1);
          if($domeDuTonnerre==0){
             // le perso1 attaque le perso2
             $perso1->attaquer($perso2);
             echo '</br>';
             //je verifie si le pv de perso2 est inferieure ou egale a 0
             if($perso2->pv<=0){
                echo $perso1->nom.' a gagné ';
                break;
             }else{
                // le perso2 attaque le perso1
                $perso2->attaquer($perso1);
                echo '</br>';
                if($perso1->pv<=0){
                    echo $perso2->nom.' a gagné ';
                break;
                }
             }
             
          } 
     }
  
    
}
duel($Elf,$Humain);*/

// Exercice 1 Correction 2

// $domeDuTonnerre=array($Elf,$Humain);

// function duel($yassine,$wahid){

//     $domeDuTonnerre=array();
//     array_push($domeDuTonnerre,$yassine,$wahid);
//     $i=0;
//     //tant que le pv du personne1 est superieur ou egale à zero pareil pour le personne2
//     while($yassine->pv>0 && $wahid->pv>0){
//         //la personne1 attaque la personne 2
//         if($i==0){
//           // $yassine->perte_de_vie($wahid);
//           $yassine->attaquer($wahid);
//           echo 'Il reste '.$wahid->pv.' PV a '.$wahid->nom;
//           echo '</br>';
//           $i++;// i passe à 1
//         }
//           if($i==1){ //si i passe à 1 wahid (index 1) attaque yassine (index 0)
//               $wahid->attaquer($yassine);//le perso2 attaque le perso1
//             //   $wahid->perte_de_vie($yassine);
//               echo 'Il reste '.$yassine->pv.' PV';
//               $i++;
//           }
//               if($i==2){ // si i egale a 2
//                 $i-=2;   // i repasse a 0 donc je re boucle tant que le pv n'est pas a 0
//               }
         
        
//     }
//     if($yassine->pv<=0){
//         echo $yassine->nom .' a perdu';
//     }else{
//         echo $wahid->nom .' a perdu';
//     }
//     echo '</br> Fin de la partie';

// }

// duel($Humain,$Elf);

//GAME ENGINE
//PARTIE 1

//Création de l'objet contenant mes combattants
$arene = new GameEngine();

// Je rentre mes combattants dans mon arène de combattants
$arene->addCombattants($Orc,$Humain,$Elf,$Orc1,$Humain1,$Elf1);
// var_dump($arene);

$arene->start();