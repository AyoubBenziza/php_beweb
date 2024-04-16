<?php
class Hopital{
    private $nbEmploye = 0;

    function __construct($nbEmploye){
        $this->nbEmploye = $nbEmploye;
    }

    function setNbEmploye($value){
        $this->nbEmploye = $value;
    }

    function getNbEmploye(){
        return $this->nbEmploye;
    }
}

class Employe extends Hopital{
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $phone;

    function __construct($id,$nom,$prenom,$adresse,$phone){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->phone = $phone;
    }

    function setId($value){
        $this->id = $value;
    }

    function getId(){
        return $this->id;
    }

    function setNom($value){
        $this->nom = $value;
    }

    function getNom(){
        return $this->nom;
    }

    function setPrenom($value){
        $this->prenom = $value;
    }

    function getPrenom(){
        return $this->prenom;
    }

    function setAdresse($value){
        $this->adresse = $value;
    }

    function getAdresse(){
        return $this->adresse;
    }

    function setPhone($value){
        $this->phone = $value;
    }

    function getPhone(){
        return $this->phone;
    }
}

class Service extends Hopital{
    private $id;
    private $nom;
    private $batiment;
    private $directeur;

    function __construct($id,$nom,$batiment,$directeur){
        $this->id = $id;
        $this->nom = $nom;
        $this->batiment = $batiment;
        $this->directeur = $directeur;
    }

    function setId($value){
        $this->id = $value;
    }

    function getId(){
        return $this->id;
    }

    function setNom($value){
        $this->nom = $value;
    }

    function getNom(){
        return $this->nom;
    }

    function setBatiment($value){
        $this->batiment = $value;
    }

    function getBatiment(){
        return $this->batiment;
    }

    function setDirecteur($value){
        $this->directeur = $value;
    }

    function getDirecteur(){
        return $this->directeur;
    }
}

class Salle extends Service{
    private $id;
    private $nbLits;

    function __construct($id,$nbLits){
        $this->id = $id;
        $this->nbLits = $nbLits;
    }

    function setId($value){
        $this->id = $value;
    }

    function getId(){
        return $this->id;
    }

    function setNbLits($value){
        $this->nbLits = $value;
    }

    function getNbLits(){
        return $this->nbLits;
    }
}

class Infirmier extends Salle{
    private $rotation;
    private $salaire;

    function __construct($rotation,$salaire){
        $this->rotation = $rotation;
        $this->salaire = $salaire;
    }

    function setRotation($value){
        $this->rotation = $value;
    }

    function getRotation(){
        return $this->rotation;
    }

    function setSalaire($value){
        $this->salaire = $value;
    }

    function getSalaire(){
        return $this->salaire;
    }
}

class Docteur extends Service{
    private $specialite;

    function __construct($specialite){
        $this->specialite = $specialite;
    }

    function setSpecialite($value){
        $this->specialite = $value;
    }

    function getId(){
        return $this->specialite;
    }
}

class Malade extends Salle{
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $phone;
    private $numlit;
    private $diagnostic;
    private $docteur;

    function __construct($id,$nom,$prenom,$adresse,$phone,$numlit,$diagnostic,$docteur){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->phone = $phone;
        $this->numlit = $numlit;
        $this->diagnostic = $diagnostic;
        $this->docteur = $docteur;
    }

    function setId($value){
        $this->id = $value;
    }

    function getId(){
        return $this->id;
    }

    function setNom($value){
        $this->nom = $value;
    }

    function getNom(){
        return $this->nom;
    }

    function setPrenom($value){
        $this->prenom = $value;
    }

    function getPrenom(){
        return $this->prenom;
    }

    function setAdresse($value){
        $this->adresse = $value;
    }

    function getAdresse(){
        return $this->adresse;
    }

    function setPhone($value){
        $this->phone = $value;
    }

    function getPhone(){
        return $this->phone;
    }

    function setNumlit($value){
        $this->numlit = $value;
    }

    function getNumlit(){
        return $this->numlit;
    }

    function setDiagnostic($value){
        $this->diagnostic = $value;
    }

    function getDiagnostic(){
        return $this->diagnostic;
    }

    function setDocteur($value){
        $this->docteur = $value;
    }

    function getDocteur(){
        return $this->docteur;
    }
}

?>