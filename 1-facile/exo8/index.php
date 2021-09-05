<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 8 : La boucle while'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$random = rand(1, 20);
$compteur = 1;

while ($random < 15) {
    $random = rand(1, 20);
    echo "Essai : {$compteur} : {$random} est <b>inférieur</b> à 15<br />";
    ++$compteur;
}
    echo $random.' est <b>supérieur</b> à 15';

?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
