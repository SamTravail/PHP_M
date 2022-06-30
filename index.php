<?php
include('includes/header.php');
include('includes/fonctions.php');
?>
<main>
<?php



// $tab = [
//     'voiture' => 'ford',
//     'nombres' => [1,2,3,4],
//     'planetes' => ['Mars', 'Terre']
// ];

// debug($tab['nombres'][0]);

$tab = [];
$tab[] = ['A','B','C'];
$tab[] = ['S','U','V'];
$tab[] = ['O','U','E','I'];

debug($tab[2][2].$tab[1][0].$tab[0][2].$tab[0][2].$tab[2][3]);

?>
</main>
<?php
include('includes/footer.php');
