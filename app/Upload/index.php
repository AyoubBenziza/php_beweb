<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Upload</title>
</head>
<body>
    <h1 class="title">Upload Partie FRONT</h1><hr>

    <form action="./request.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Formulaire POST</legend>
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom" required>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Mot de Passe</label>
            <input type="password" id="password" name="password" required>
            <label for="birthdate">Date de naissance</label>
            <input type="date" id="birthdate" name="birthdate" required>
            <label for="sexe">Sexe</label>
            <select id="sexe" name="sexe" required>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Non Binaire">Non binaire</option>
            </select>
            <label for="phone">N° de téléphone</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required>
            <input type="file" name="fileToUpload" id="fileToUpload" required>
            <input type="submit" name="submit" value="Envoi du formulaire">
        </fieldset>
    </form>

    <!-- <form action="request.php" method="GET">
        <fieldset>
            <legend>Formulaire GET</legend>
            <label for="inputGet1">Input 1</label>
            <input type="text" id="inputGet1" name="value">
            <input type="submit">
        </fieldset>
    </form> -->

    <a href="http://localhost/Request/request.php" id="secret" class="lien cache">Accéder à la partie BACK</a>
    <a href="http://localhost/Request/session.php" class="lien">Accéder à la partie SESSION</a>
    <script src="./main.js"></script>
</body>
</html>