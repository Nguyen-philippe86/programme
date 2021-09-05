<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 12 : Tableaux et moyenne'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$Marc = [12, 15, 13, 7, 18];
$Mathieu = [11, 14, 10, 4, 20, 8, 2];

$resultat = 0;

for ($i = 0; $i < count($Marc); ++$i) {
    $resultat += $Marc[$i];
}
echo 'La moyenne des notes de <b>Marc</b> est de <b>'.($resultat / count($Marc)).'</b><br />';

//Plus simple...
$moyenneMathieu = (array_sum($Mathieu)) / count($Mathieu);
echo 'La moyenne des notes de <b>Mathieu</b> est de <b>'.$moyenneMathieu.'</b><br />';

?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
