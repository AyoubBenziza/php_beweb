<?php
class User{

    // Properties
    private $id = 0;
    protected $first_name="";
    protected $last_name="";
    private $phone="";
    protected $year_of_birth=0;

    // Magic Methods 
    function __construct($id,$first,$last,$phone,$yob){
        // echo "<p>Construct object class: ",__CLASS__,"</p>";
        $this->id=$id;
        $this->first_name=$first;
        $this->last_name=$last;
        $this->phone=$phone;
        $this->year_of_birth=$yob;
    }

    // Getters and setters
    public function get_id(){return $this->id;} // Read only

    public function get_first_name(){return $this->first_name;} // Read only

    public function get_last_name(){return $this->last_name;} // Read only

    public function get_phone(){return $this->phone;} // Read
    public function set_phone($value){$this->phone=$value;} // Write

    public function get_year(){return $this->year_of_birth;} // Read only
}

// Création de class Child qui hérite des paramètres de la classe User
class Admin extends User{

    private $roll=null;

    function __construct($id,$first,$last,$phone,$yob){
        parent::__construct($id,$first,$last,$phone,$yob);
    }

    // private $uneautre = "un truc de plus";
    //     public function get_uneautre(){return $this->uneautre;}
    public function __toString(){
        return $this->first_name . " " . $this->last_name . " Object to string";
    }

    public function get_role(){return $this->role;}
    public function set_role($value){$this->role=$value;}

    public function get_year(){return $this->year_of_birth . " Surchargé par la class enfant";} // Read only
}

?>