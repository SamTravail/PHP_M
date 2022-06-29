<?php
include('includes/header.php');
include('includes/fonctions.php');

?>
<main>
<?php

$notes = [12,5,16,7];

$moyenne = array_sum($notes)/count($notes);
debug($moyenne);


?>
</main>

<?php
include('includes/footer.php');