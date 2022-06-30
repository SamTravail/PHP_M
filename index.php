<?php
include('includes/header.php');
include('includes/fonctions.php');

?>
<main>
    <?php

    // $tabnbs = [27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572];

    // $nombres = "<ul>";
    // foreach ($tabnbs as $tabnb) {
    //     $nombres .= "<li>$pairImpair</li>";
    //     if ($tabnb % 2 === 0) {
    //         echo "<li>$tabnb est pair</li>";
    //     } else {
    //         echo "<li>$tabnb est impair</li>";
    //     }
    // }
    // $nombres .= "</ul>";

    $users = [
        "firstname" => 'Mike',
        "lastname" => 'Olganh',
        "pseudo" => '',
        "age" => '34',
        "food" => '',
        "sport" => '',
    
    ];
    foreach($users as $key => $value) {
        if ($value == ""){
            echo "$key : Aucune information<br>";
        } else {
            echo "$key : $value<br>";
        }
    }
    
    ?>

</main>

<?php
include('includes/footer.php');
