<?php
include('includes/header.php');
include('includes/fonctions.php');
?>
<main>
<?php
$tableau=array();

$tableau = [];
$tableau = [true,45,'terre',[45,46,47,48]];

debug($tableau);

$tableau[] = 'Janvier';
array_push($tableau,'Voiture');
array_push($tableau,'Voiture2','Tortue');

debug($tableau[2]);


?>
</main>
<?php
include('includes/footer.php');
