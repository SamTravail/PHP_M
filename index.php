<?php
include('includes/header.php');
include('includes/fonctions.php');

?>
<main>
<?php


$produits = [
    ['nom' => 'chaussettes', 'prix' => 10],
    ['nom' => 'velo', 'prix' => 500],
    ['nom' => 'carotte', 'prix' => 2],
    ['nom' => 'boulon', 'prix' => 9]
];
?>
<ul>
    <?php
        foreach ($produits as $produit) {
    ?>
    <li>
        <?=$produit['nom']?> : <?=$produit['prix']?> €
    </li>
    <?php } ?>
</ul>

</main>

<?php
include('includes/footer.php');