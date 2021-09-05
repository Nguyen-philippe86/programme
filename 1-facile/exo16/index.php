<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 16 : Tableaux de tableaux associatifs'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$j1 = [
    'Nom' => 'Marie',
    'Age' => 31,
    'Sexe' => true,
];
$j2 = [
    'Nom' => 'Matthieu',
    'Age' => 30,
    'Sexe' => false,
];
$j3 = [
    'Nom' => 'Marc',
    'Age' => 32,
    'Sexe' => false,
];
$j4 = [
    'Nom' => 'Mathilde',
    'Age' => 34,
    'Sexe' => true,
];

$joueurs = [$j1, $j2, $j3, $j4];

foreach ($joueurs as $joueur) {
    afficherJoueur($joueur);
    echo '<br/>-----------------<br/>';
}

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
