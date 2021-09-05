<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 10 : Les fonctions'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$monMot = 'Coucou';

function supprimerVoyelle($mot)
{
    $voyelle = ['a', 'e', 'i', 'o', 'u', 'y'];

    return str_replace($voyelle, '', $mot);
}
$nouveauMot = supprimerVoyelle($monMot);

echo $monMot.' sans voyelle est '.$nouveauMot;
?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
