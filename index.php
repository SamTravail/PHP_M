<?php
include('includes/header.php');
include('includes/fonctions.php');

?>
<main>
    <?php

    $tabnbs = [27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572];

    $nombres = "<ul>";
    foreach ($tabnbs as $tabnb) {
        $nombres .= "<li>$pairImpair</li>";
        if ($tabnb % 2 === 0) {
            echo "<li>$tabnb est pair</li>";
        } else {
            echo "<li>$tabnb est impair</li>";
        }
    }
    $nombres .= "</ul>";
    ?>

</main>

<?php
include('includes/footer.php');
