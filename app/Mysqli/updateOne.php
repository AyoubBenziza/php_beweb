<?php
$query = "UPDATE movies SET director_movie='6' WHERE id_movie='$id'";

$result = mysqli_query($mysqli, $query);
var_dump($result);

if(!$result){
    echo "Mysqli Update Error: " . mysqli_error($mysqli) . "<br>";
}else{
    echo "Mysqli Update Success: " . $db_name . "<br>";
}

mysqli_close($mysqli);
?>