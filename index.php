<?php

use LDAP\Result;

include('includes/header.php');
include('includes/fonctions.php');
?>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 700px;
        width: 100%;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        row-gap: 3rem;
        
    }

    .card {
        border: 1px, solid, #0f0;
        /* background-color: #d9d9d9d9; */
        row-gap: 3rem;
        width: 50%;
    }
</style>
<main>
    <?php

    // $users = [
    //     "firstname" => 'Mike',
    //     "lastname" => 'Olganh',
    //     "pseudo" => '',
    //     "age" => '34',
    //     "food" => '',
    //     "sport" => '',

    // ];
    // foreach($users as $key => $value) {
    //     if ($value == ""){
    //         echo "$key : Aucune information<br>";
    //     } else {
    //         echo "$key : $value<br>";
    //     }
    // }

    // $nombres = [4,15,2,145,42,5,78,12];
    // $nbmax= $nombres[0];
    // // trouver le nombre mai du tableau
    // foreach($nombres as $nombre) {
    //         if ($nombre > $nbmax){
    //             $nbmax = $nombre;
    //         }
    //     }
    //     echo($nbmax);

    // $peoples = [
    //     [
    //         'nom' => 'Mohamed',
    //         'prenom' => 'Jean',
    //         'email' => 'jean@mohamed.com'
    //     ],
    //     [
    //         'nom' => 'Dupond',
    //         'prenom' => 'Lucie',
    //         'email' => 'lucie@dupond.com'
    //     ]
    //     ];
    // echo "le nom de Lucie est : ". $peoples[1]['nom'];

    // $json_peoples = json_encode($peoples);
    // debug($json_peoples);

    $json_peoples = '[{
    "nom" : "Durand",
    "prenom" : "Claude",
    "age" : 35,
    "couleur" : ["rouge", "vert", "jaune"],
    "image" : "https://ximg.es/64x64/000/fff"
},{
    "nom" : "Viko",
    "prenom" : "Amy",
    "age" : 45,
    "couleur" : ["marron", "bleu", "violet"],
    "image" : "https://ximg.es/64x64/000/fff"
}]';

    // debug($json_peoples);

    // $peoples_array_php = json_decode($json_peoples,true);

    // debug($peoples_array_php);

    $users = file_get_contents("./users.json");
    // debug($users);

    $users_array_php = json_decode($users, true);

    $id_users = $users_array_php['results'];

    // echo(count($id_users));
    ?>
    <div class="container">
        <?php
        foreach ($id_users as $id_user) {
        ?>

            <div class="card" style="text-align: center;">
                <img src="<?=$id_user['picture']['medium']; ?>" alt="image_user"></img>
                <h2><?=$id_user['name']['first']; ?>
                    <span> <?=$id_user['name']['last']; ?></span>
                </h2>
                <h4><?=$id_user['email'] ?></h4>
                <h4><?=$id_user['dob']['age']; ?> ans</h4>
                <p>adresse : <?=$id_user['location']['state']; ?></p>
                <p>telephone : <?=$id_user['cell']; ?></p>
            </div>

        <?php }; ?>
    </div>
    <?php
    // debug($users_array_php);

    ?>
    <!-- 
    <img src="<?php
                // echo $peoples_array_php[1]['image'];

                ?>" alt="Amy image"></img> -->

</main>

<?php
include('includes/footer.php');
