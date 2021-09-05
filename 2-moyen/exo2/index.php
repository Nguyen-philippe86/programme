<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 1 : Les Tableaux'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

require 'functions.php';
$tabs1 = [2, 6, 10, 20, 9, 14];
$tabs2 = [4, 8, 2, 26, 18, 14];

?>

<?php
    echo '<div class="container">';
        echo '<div class="row text-center">';
            echo '<div class="col-6 d-flex flex-column align-items-center">';
                echo '<h2>Tableau 1</h2>';
                echo afficherTableau($tabs1) . '<br/>';
                echo calculerMoyenne($tabs1) . '<br/>';
                if (estTableauPair($tabs1)) {
                    echo "Le tableau contient que des valeur <b>pair</b>";
                } else {
                    echo "Le tableau ne contient pas que des valeur <b>pair</b>";
                };
            echo '</div>';
            echo '<div class="col-6 d-flex flex-column align-items-center">';
                echo '<h2>Tableau 2</h2>';
                echo afficherTableau($tabs2) . '<br/>';
                echo calculerMoyenne($tabs2) . '<br/>';
                if (estTableauPair($tabs2)) {
                    echo "Le tableau contient que des valeur <b>pair</b>";
                } else {
                    echo "Le tableau ne contient pas que des valeur <b>pair</b>";
                };
            echo '</div>';
        echo '</div>';
    echo '</div>';
?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
