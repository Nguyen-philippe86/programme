<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 13 : Tableaux et fonctions'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$Marc = [12, 15, 13, 7, 18];
$Mathieu = [11, 14, 10, 4, 20, 8, 2];
$Pierre = [5, 13, 9, 3];
$Paul = [6, 11, 15, 2];

function moyenneEleve($note)
{
    $resultat = 0;
    for ($i = 0; $i < count($note); ++$i) {
        $resultat += $note[$i];
    }

    return $resultat / count($note);
}
echo 'La moyenne des notes de <b>Marc</b> est de <b>'.moyenneEleve($Marc).'</b><br />';
echo 'La moyenne des notes de <b>Mathieu</b> est de <b>'.moyenneEleve($Mathieu).'</b><br />';
echo 'La moyenne des notes de <b>Pierre</b> est de <b>'.moyenneEleve($Pierre).'</b><br />';
echo 'La moyenne des notes de <b>Paul</b> est de <b>'.moyenneEleve($Paul).'</b><br />';

?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
