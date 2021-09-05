<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 9 : Les fonctions'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$random = rand(1, 10);
$b = 122;

function chiffrePair($nombre)
{
    if (0 == $nombre % 2) {
        return true;
    }

    return false;
}

echo '<div>';
if (chiffrePair($random)) {
    echo "{$random} est un chiffre pair";
} else {
    echo "{$random} n'est pas un chiffre pair";
}
echo '</div>';

//echo '<div>';
    //echo (chiffrePair($b)) ? "{$b} est un chiffre pair" : "{$b} n'est pas un chiffre pair";
//echo '</div>';
?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
