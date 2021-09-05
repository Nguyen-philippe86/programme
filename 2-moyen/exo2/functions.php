<?php

function afficherTableau($tableaux){
    for($i = 0; $i < count($tableaux); $i++) {
        echo ($i === 0) ? '' : ' - ';
        echo $tableaux[$i];
    }
}

function calculerMoyenne($tableaux){
    echo 'La moyenne est de : '. array_sum($tableaux) / count($tableaux);
}

function estTableauPair($tableaux){
    foreach ($tableaux as $valeur){
        if ($valeur % 2 !== 0) return false;
    } return true;
}
