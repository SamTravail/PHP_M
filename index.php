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
    
$nombres = [4,15,2,145,42,5,78,12];
define("nb", 0);
// trouver le nombre mai du tableau
foreach($nombres as $nombre) {
        if ($nombre > nb){
            (nb == $nombre);
        } else {
            echo(nb);
        }
    }




    ?>
</main>

<?php
include('includes/footer.php');
