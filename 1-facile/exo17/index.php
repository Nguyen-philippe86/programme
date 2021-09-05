<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 17 : Tableaux complexe'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$j1 = [
    'Nom' => 'Marie',
    'Age' => 31,
    'Sexe' => true,
    'Note' => [
        'Note 1' => 12,
        'Note 2' => 16,
        'Note 3' => 9,
        'Note 4' => 16,
    ],
];
$j2 = [
    'Nom' => 'Matthieu',
    'Age' => 30,
    'Sexe' => false,
    'Note' => [
        'Note 1' => 15,
        'Note 2' => 15,
        'Note 3' => 11,
        'Note 4' => 19,
    ],
];
$j3 = [
    'Nom' => 'Marc',
    'Age' => 32,
    'Sexe' => false,
    'Note' => [
        'Note 1' => 11,
        'Note 2' => 12,
        'Note 3' => 14,
        'Note 4' => 18,
    ],
];
$j4 = [
    'Nom' => 'Mathilde',
    'Age' => 34,
    'Sexe' => true,
    'Note' => [
        'Note 1' => 10,
        'Note 2' => 9,
        'Note 3' => 18,
        'Note 4' => 19,
    ],
];

$joueurs = [$j1, $j2, $j3, $j4];

foreach ($joueurs as $joueur) {
    afficherJoueur($joueur);
    // moyenneEleve($joueur);
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

    echo '<br/>';

    $resultat = 0;
    foreach ($joueur['Note'] as $key => $value) {
        $resultat += $value;
        echo $key.' : '.$value.' </br>';
    }
    echo 'la moyenne est de : '.$resultat / (count($joueur['Note']));
}

?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
