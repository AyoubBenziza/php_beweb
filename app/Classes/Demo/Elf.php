<?php

class Elf extends Personnage{
    

    function __construct($nom,$force=5,$pv=60,$endurance=20){
 
        $this->force=$force;
        $this->pv=$pv;
        $this->endurance=$endurance;
        $this->nom=$nom;
     }
}