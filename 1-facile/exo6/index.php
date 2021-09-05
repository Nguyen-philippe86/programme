<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 6 : La boucle for'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$random = rand(1, 15);

echo "<h4>Voici le cumul des {$random} premiers nombres (sens inverse)<br /></h4>";

$result = 0;

for ($i = $random; $i >= 1; --$i) {
    $result += $i;
    echo 'Étapes '.($random - $i + 1).' - Résultat = '.$result.' <br />';
}

?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
