<?php
require("./ville.class.php");
$personne = new Personne("Ayoub","Benziza","34 Avenue de Montpellier");
var_dump($personne);
echo $personne->getPersonne();
$personne->setAdresse("18 Rue de Rouens");
unset($personne);
?>
Affichage de l'objet Personne supprimée:
<?php
var_dump($personne);
?>