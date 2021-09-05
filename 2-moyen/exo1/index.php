<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 1 : Tableau à deux dimensions'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

//Je créer un tableau de ligne
$ligne = [];
//Je boucle dans ce meme tableau
for ($i = 1; $i <= 10; ++$i) {
    //je créer un tableau de colonne
    $colonne = [];
    //Je boucle dans ce meme tableau
    for ($j = 1; $j <= 10; ++$j) {
        //J'insère la multiplication i*j dans le tableau colonne
        $colonne[] = $i * $j;
    }
    //J'insère le tableau de multiplication dans le tableau ligne
    $ligne[] = $colonne;
}

?>
<table class="table">
    <?php for ($i = 0; $i < 10; ++$i) { ?>
    <tr <?php (0 === $i) ? 'class="font-weight-bold"' : ''; ?>>
        <?php for ($j = 0; $j < 10; ++$j) { ?>
        <td <?php (0 === $j) ? 'class="font-weight-bold"' : ''; ?>>
            <?php echo $ligne[$i][$j]; ?>
        </td>
        <?php }?>
    </tr>
    <?php } ?>
</table>
<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
