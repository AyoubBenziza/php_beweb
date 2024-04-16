<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/class.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Classes</title>
</head>
<body>
    <h1><span class="badge bg-dark">Connexion Réussie</span></h1>

    <?php
    //---Erreurs Management---//
    ini_set('display_errors','1');
    ini_set('display_startup_errors','1');
    error_reporting(E_ALL);

    // Intégration de notre classe 
    require("./user.class.php");
    ?>
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#user" role="button" aria-expanded="false" aria-controls="user">
            User
        </a>
        <a class="btn btn-success" data-bs-toggle="collapse" href="#admin" role="button" aria-expanded="false" aria-controls="admin">
            Admin
        </a>
    </p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="user">
                <div class="card card-body text-bg-dark">
                    <?php
                    // Création d'une variable de classe User en appelant le constructor avec les arguments
                    // $parent = new User(1,"Albert","Dupont","118-218",1999);
                    // $enfant = new Admin(2,"Albert Jr","Dupont","118-218-000",2015);

                    // Affectation sur un objet d'une classe
                    // $parent->id=1;
                    // $parent->first_name="Albert";
                    // $parent->last_name="Dupont";
                    // $parent->phone = "118-218";
                    // $parent->year_of_birth=1999;

                    // var_dump($parent);

                    // Afficher chaque clé et sa variable de l'objet
                    // foreach($parent as $p => $v){
                    //     echo "<p>",$p,":",$v,"</p>";
                    // }

                    // Appel d'une fonction créé dans notre classe(si ce n'est un magic method)
                    // echo "<p>User id: ",$parent->get_id(),"</p>";

                    // echo "<p>User first_name: ",$parent->get_first_name(),"</p>";

                    // echo "<p>User last_name: ",$parent->get_last_name(),"</p>";

                    // echo "<p>User id: ",$parent->get_phone(),"</p>";
                    // echo "<p>Changement de n° de phone...",$parent->set_phone("06-06-06-06-06"),"</p>";
                    // echo "<p>New User phone: ",$parent->get_phone(),"</p>";

                    // echo "<p>User year_of_birth: ",$parent->get_year(),"</p>";
                    $obj_user = new User(18,"Albert","Dupontel","+33 1 23 45 67 89",1999);
                    var_dump($obj_user);

                    echo "<p>User id " , $obj_user->get_id(), "</p>";

                    $obj_user->set_phone("01 23 45 67 89");
                    ?>
                </div>
            </div>
        </div>
    </div>
        <div class="col">
            <div class="collapse multi-collapse" id="admin">
                <div class="card card-body text-bg-dark">
                    <?php
                    // Affiche la classe Admin en tableau
                    // var_dump($enfant);

                    // Affiche les classes parents de la classe Admin
                    // var_dump(class_parents("Admin"));
                    $obj_admin = new Admin(27,"Jean","Dujardin","+33 1 23 45 67 89",2000);
                    var_dump($obj_admin);

                    // Si notre classe est compris entre des chaînes de caractères alors elle renverra ce qu'elle a définit dans le tostring()
                    echo "<p>Display Object: ", $obj_admin, "</p>";

                    echo "<p>Surcharge methode: ",$obj_admin->get_year(),"</p>";

                    echo "<p>Id: ",$obj_admin->get_id(),"</p>";
                    ?>
                </div>
            </div>
        </div>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>