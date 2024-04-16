<?php
$query = "SELECT * FROM movies";

$result = mysqli_query($mysqli, $query);
var_dump($result);

$records = array();
while($row = mysqli_fetch_assoc($result)){
    array_push($records,$row);
};

var_dump($records);

mysqli_close($mysqli);
?>