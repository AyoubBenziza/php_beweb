<?php

class Humain extends Personnage{
    
    function __construct($nom,$force=10,$pv=50,$endurance=100){
 
        $this->force=$force;
        $this->pv=$pv;
        $this->endurance=$endurance;
        $this->nom=$nom;
     }
}