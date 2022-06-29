<?php
include('includes/header.php');
include('includes/fonctions.php');
?>
<main>
<?php



$ages= [
    'Michel' => 34,
    'lucie' => 3,
    'Mouloud' => 53
];

rsort($ages);
debug($ages);

$planetes = ['mars','terre','pluton','venus','jupiter'];
debug($planetes);
rsort($planetes);
debug($planetes);



?>
</main>
<?php
include('includes/footer.php');
