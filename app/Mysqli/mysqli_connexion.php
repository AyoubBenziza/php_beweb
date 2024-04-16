<?php

// Connexion à la base de données
$mysqli = mysqli_connect($host, $user_name, $user_password, $db_name);

if(!$mysqli){
    // si erreur mysql connextion erreur
    echo 'mysql connection error: ' . mysqli_connect_error() . '<br>';
}else{
    echo 'mysql connection success: ' . $db_name . '<br>';
}

?>