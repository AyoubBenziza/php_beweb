<?php
class form{
    private $form="<form>";
    private $fieldset="<fieldset>";
    private $texte="";
    private $submit="";

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
        echo $this->form . $this->fieldset . $this->texte . $this->submit . "</fieldset></form>";
    }
}

echo "Connexion";

$form1 = new form("./exo3.php","GET");
var_dump($form1);
$form1->setText("text","test","test");
$form1->setText("text","test22","test22");
$form1->setSubmit();
$form1->getForm();
?>