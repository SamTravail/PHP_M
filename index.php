<?php
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
    "age" : 35
},{
    "nom" : "Viko",
    "prenom" : "Amy",
    "age" : 45
}]';

debug($json_peoples);

$peoples_array_php = json_decode($json_peoples,true);

debug($peoples_array_php);


    ?>
</main>

<?php
include('includes/footer.php');
