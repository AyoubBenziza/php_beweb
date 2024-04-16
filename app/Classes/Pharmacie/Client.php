<?php
// require("./Pharmacie.php");
class Client{
    public $nom="";
    public $credit=0;

    public function __construct($nom,$credit){
        $this->nom = $nom;
        $this->credit = $credit;
    }
}
?>