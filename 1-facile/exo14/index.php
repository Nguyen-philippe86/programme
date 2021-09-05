<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 14 : Tableau de tableaux'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$Marc = [12, 15, 13, 7, 18];
$Mathieu = [11, 14, 10, 4, 20, 8, 2];
$Pierre = [5, 13, 9, 3];
$Paul = [6, 11, 15, 2];

$notesEleves = [$Marc, $Mathieu, $Pierre, $Paul];

function moyenneEleve($note)
{
    $resultat = 0;
    for ($i = 0; $i < count($note); ++$i) {
        $resultat += $note[$i];
    }

    return $resultat / count($note);
}
echo '<h4>Exemple boucle for</h4>';
for ($i = 0; $i < count($notesEleves); ++$i) {
    echo 'La moyenne des notes de l\'élève<b> '.$i.'</b> est de <b>'.moyenneEleve($notesEleves[$i]).'</b><br />';
}
echo '<br />';
echo '<h4>exemple boucle foreach</h4>';
foreach ($notesEleves as $key => $note) {
    echo 'La moyenne des notes de l\'élève<b> '.$key.'</b> est de <b>'.moyenneEleve($note).'</b><br />';
}

?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';

    // remettre les anciens logements
    // partrimoine_0_date_livraison
    // meta_key = nom du champ
    // meta_value = valeur du champ
