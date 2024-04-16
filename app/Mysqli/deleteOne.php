<?php
$query = "DELETE FROM movies WHERE id_movie='$id'";

$result = mysqli_query($mysqli, $query);
var_dump($result);

if(!$result){
    echo "Mysqli Delete Error: " . mysqli_error($mysqli) . "<br>";
}else{
    echo "Mysqli Delete Success: " . $db_name . "<br>";
}

mysqli_close($mysqli);
?>