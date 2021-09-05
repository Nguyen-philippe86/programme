<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 3 : Les tests'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$random = rand(1, 20);

echo '<h2>Le chiffre est : '.$random.'</h2><br>';

if ($random <= 5) {
    echo 'Il est compris entre 1 et 5 <br>';
} elseif ($random <= 10) {
    echo 'Il est compris entre 5 et 10 <br>';
} elseif ($random <= 15) {
    echo 'Il est compris entre 10 et 15 <br>';
} else {
    echo 'Il est compris entre 15 et 20 <br>';
}
?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
