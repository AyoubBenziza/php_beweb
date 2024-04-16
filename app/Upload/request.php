<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <title>Page de Request</title>
</head>
<body>

    <h1 class="title">Upload Partie BACK</h1>
    <?php
        session_start();
        // echo "<hr><p>Super Global GET</p>";
        // var_dump($_GET);
        // echo "<hr><p>Super Global POST</p>";
        // var_dump($_POST);
        // echo "<hr><p>Super Global REQUEST</p>";
        // var_dump($_REQUEST);
        // echo "<hr><p>Super Global COOKIE </p>";
        // var_dump($_COOKIE);

        $prenom = $_REQUEST["prenom"];
        $nom = $_REQUEST["nom"];
        $email = "???";
        $birthdate = "???";
        $sexe = "Inconnu";
        $phone = "118 218";
        $image = "https://miro.medium.com/max/1400/0*xsxKFUJjJYXKKQO8";
        $texte = "Bravo! Tu as trouvé cet Easter Egg. Petit Coquin va!";

        if($_REQUEST!=null){
            $texte="Rien à dire...";
            $email = $_REQUEST["email"];
            $birthdate = $_REQUEST["birthdate"];
            $sexe = $_REQUEST["sexe"];
            $phone = $_REQUEST["phone"];
            $password = password_hash($_REQUEST["password"], PASSWORD_DEFAULT);
        }

        switch($sexe){
            case "Homme":
                $image = "https://www.kindpng.com/picc/m/146-1460528_yaranaika-anime-face-meme-hd-png-download.png";
                break;
            case "Femme":
                $image = "https://cdn.riddle.com/embeds/v2/images/q_80,c_fill,w_960,h_540/845/845b904a213562cf6723ca82dff6c7b7.jpg";
                break;
            case "Non Binaire":
                $image = "https://i.pinimg.com/originals/e4/38/dc/e438dc31892d21bb9a92b4ed5b9f0e50.png";
                break;
        }

        $_SESSION["username"] = $prenom . " " . $nom;

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "<script>alert('File is not an image.');window.location.href='http://localhost/Upload/index.php';</script>";
            $uploadOk = 0;
        }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
        echo "<script>alert('Sorry, file already exists.');window.location.href='http://localhost/Upload/index.php';</script>";
        $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "<script>alert('Sorry, your file is too large.');window.location.href='http://localhost/Upload/index.php';</script>";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');window.location.href='http://localhost/Upload/index.php';</script>";
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<script>alert('Sorry, your file is too large.');window.location.href='http://localhost/Upload/index.php';</script>";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
        }
    ?>
    <div class="contenu">
        <div class="card text-bg-dark" style="width: 18rem;">
            <img src="<?= $target_file;?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $_SESSION["username"];?></h5>
                <p class="card-text"><?= $texte?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-bg-dark"><?= "Sexe: " . $sexe;?></li>
                <li class="list-group-item text-bg-dark"><?= "Date de naissance: " . $birthdate;?></li>
                <li class="list-group-item text-bg-dark"><?= "Email: " . $email;?></li>
                <li class="list-group-item text-bg-dark"><?= "Téléphone: " . $phone;?></li>
            </ul>
        </div>
        <a href="http://localhost/Request/http://localhost/Upload/index.php'" class="lien">Accéder à la partie FRONT</a>
        <a href="http://localhost/Request/session.php" class="lien">Accéder à la partie SESSION</a>
    </div>
</body>
</html>