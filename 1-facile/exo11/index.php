<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 11 : Les tableaux'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$homme = ['Mathieu', 'Pierre', 'Marc', 'Jean'];
$femmes = ['Morgane', 'Mathilde', 'Julie'];

for ($i = 0; $i < count($homme); ++$i) {
    echo "{$i} : {$homme[$i]} <br />";
}
echo '****************************<br />';

foreach ($femmes as $key => $femme) {
    echo "{$key} : {$femme} <br />";
}
?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
