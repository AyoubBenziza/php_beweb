<?php
$query = "INSERT INTO movies (`title_movie`,`duration_movie`,`year_movie`,`synopsis_movie`,`director_movie`)
VALUES ('Gladiator', '155', '2000', 'Synopsis gladiator','1')";

$result = mysqli_query($mysqli, $query);
var_dump($result);

if(!$result){
    echo "Mysqli Insert Error: " . mysqli_error($mysqli) . "<br>";
}else{
    echo "Mysqli Insert Success: " . $db_name . "<br>";
}

mysqli_close($mysqli);
?>