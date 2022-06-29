<?php
include('includes/header.php');
include('includes/fonctions.php');

?>
<main>
<?php

$notes = [12,5,16,7];

//$sommeNotes = 0;
//for ($j =0; $j<count($notes); $j++){
//    $sommeNotes += $notes[$j];
//}
//$moyenneNotes=$sommeNotes/count($notes);

//echo $moyenneNotes;
foreach($notes as $note) {
    echo $note. '<br>';
}

?>
</main>

<?php
include('includes/footer.php');