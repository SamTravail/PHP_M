<?php

use LDAP\Result;

include('includes/header.php');
include('includes/fonctions.php');
?>

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
debug($users);

$users_array_php = json_decode($users,true);


echo(count($users_array_php['results']));

$id_user = $users_array_php['results'];
?>

<div class="card" style="text-align: center;">
    <img src="<?php echo $users_array_php['results'][0]['picture']['thumbnail']; ?>" alt="thumbnail_user"></img>
    <h2><?php echo$users_array_php['results'][0]['name']['first']; ?>
    <span> <?php echo$users_array_php['results'][0]['name']['last']; ?></span></h2>
    <h3><?php echo$users_array_php['results'][0]['email']?></h3>
    <h4><?php echo$users_array_php['results'][0]['dob']['age']; ?> ans</h4>
    <p>adresse : <?php echo$users_array_php['results'][0]['location']['state']; ?></p>
    <p>telephone : <?php echo$users_array_php['results'][0]['cell']; ?></p>
</div>

<?php 
debug($users_array_php);



?>
<!-- 
    <img src="<?php 
        // echo $peoples_array_php[1]['image'];
    
    ?>" alt="Amy image"></img> -->

</main>

<?php
include('includes/footer.php');
