<?php

namespace Firme\Client{
    class Personne{
        public $code;
        public $coordonnees;

        public function  __construct($code,$coordonnees){
            $this->code = $code;
            $this->coordonnees = $coordonnees;
        }

        public function set($code,$coordonnees){
            $this->code = $code;
            $this->coordonnees = $coordonnees;
        }
        public function get(){
            echo "Coordonnées: $this->coordonnees Code:$this->code";
        }
    }
}

namespace Firme\Commercial{
    class Personne{
        public $code;
        public $coordonnees;

        public function  __construct($code,$coordonnees){
            $this->code = $code;
            $this->coordonnees = $coordonnees;
        }

        public function set($code,$coordonnees){
            $this->code = $code;
            $this->coordonnees = $coordonnees;
        }
        public function get(){
            echo "Coordonnées: $this->coordonnees Code:$this->code";
        }
    }
}

namespace{
$client1 = new Firme\Client\Personne(1845,"18 Avenue des Hagraahh");
$client1->set(18,"Avenue des Boules");
var_dump($client1);
$client2 = new Firme\Client\Personne(567,"666 Rue de la Poisse");
var_dump($client2);
$commercial = new Firme\Commercial\Personne(24956,"Rue des Chattes");
var_dump($commercial);
}
?>