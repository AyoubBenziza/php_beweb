<?php

  class Orc extends Personnage{


     function __construct($nom,$force=15,$pv=40,$endurance=70){
 
        $this->force=$force;
        $this->pv=$pv;
        $this->endurance=$endurance;
        $this->nom=$nom;
     }
  }