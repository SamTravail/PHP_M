<?php
include('includes/header.php');
include('includes/fonctions.php');
?>
<main>
<?php
$tableau=array();

$tableau = [];
$tableau = [true,45,'terre',[45,46,47]];

debug($tableau);

$tableau[] = 'Janvier';
array_push($tableau,'Voiture');
array_push($tableau,'Voiture2','Tortue');


$notes = [12,5,16,7];
$nbElementsNotes = count($notes);
$sommeNotes = $notes[0]+$notes[1]+$notes[2]+$notes[3];
$moyenneNotes = $sommeNotes/$nbElementsNotes;

debug($moyenneNotes);



?>
</main>
<?php
include('includes/footer.php');
