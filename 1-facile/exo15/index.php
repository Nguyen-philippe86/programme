<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 15 : Tableau associatifs'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$j1 = [
    'Nom' => 'Marie',
    'Age' => 30,
    'Sexe' => true,
];

$j2 = [
    'Nom' => 'Matthieu',
    'Age' => 30,
    'Sexe' => false,
];

afficherJoueur($j1);
echo '</br>-----------------</br>';
afficherJoueur($j2);

function afficherJoueur($joueur)
{
    echo 'Nom : '.$joueur['Nom'].'</br>';
    echo 'Age : '.$joueur['Age'].'</br>';
    if ($joueur['Sexe']) {
        echo 'Sexe : Femme';
    } else {
        echo 'Sexe : Homme';
    }
}
?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
