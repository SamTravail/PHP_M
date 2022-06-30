<?php
include('includes/header.php');
include('includes/fonctions.php');
?>

<main>
    <?php

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
