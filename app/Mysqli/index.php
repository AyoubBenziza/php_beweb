<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysqli</title>
</head>
<body>
    
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'conf.php';
require_once 'mysqli_connexion.php';

$id=12;
//Requetes CRUD en Mysqli
require('readAll.php');
require('insertOne.php');
require('readOne.php');
require('updateOne.php');
require('readOne.php');
require('deleteOne.php');



?>
</body>
</html>