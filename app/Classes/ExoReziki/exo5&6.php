<?php
//---Erreurs Management---//
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

class form{
    protected $form="<form>";
    protected $texte="";
    protected $submit="";

    public function __construct($lien,$method){
        $this->form = "<form action='$lien' method='$method'>";
    }

    public function setText($type,$id,$name){
        $this->texte.="<input type='$type' id='$id' name='$name'>";
    }

    public function setSubmit(){
        $this->submit = "<input type='submit' name='submit'>";
    }

    public function getForm(){
        echo $this->form . "<fieldset>" . $this->texte . $this->submit . "</fieldset></form>";
    }
}

class form2 extends form{
    private $radio = "";
    private $checkbox="";

    public function setRadio($id,$name){
        for($i=0;$i<count($id);$i++){
            $this->radio.="<input type='radio' id='" . $id[$i] . "' name='$name' value='".$id[$i]."'><label for='".$id[$i]."'>".$id[$i]."</label>";
        }
    }

    public function setCheckbox($id,$name){
        for($i=0;$i<count($id);$i++){
            $this->checkbox.="<input type='checkbox' id='" . $id[$i] . "' name='$name' value='".$id[$i]."'><label for='".$id[$i]."'>".$id[$i]."</label>";
        }
    }

    public function getForm2(){
        echo $this->form . "<fieldset>" . $this->texte . $this->radio . $this->checkbox . $this->submit . "</fieldset></form>";
    }
}

echo "Connexion";

$form2 = new form2("./exo3.php","GET");
// var_dump($form1);
$form2->setText("text","test","test");
$form2->setText("text","test22","test22");
$form2->setRadio(["Pomme","Banane","Kiwi"],"fruits");
$form2->setCheckbox(["Homme","Femme"],"sexe");
$form2->setSubmit();
$form2->getForm2();

$formClone = clone $form2;
$formClone->setRadio(["Rouge","Bleu","Vert"],"couleur");
$formClone->getForm2();
?>