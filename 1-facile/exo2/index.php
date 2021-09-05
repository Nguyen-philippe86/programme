<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 2 : Variables et ternaires'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$nom = 'Marie';
$age = 30;
$sexe = false;

$nom2 = 'Pierre';
$age2 = 32;
$sexe2 = true;

    echo $nom.' à '.$age.'ans';
    echo (!$sexe) ? " et c'est une femme" : "et c'est un homme";
    echo '<br />';
?>

<?php echo $nom2; ?> à <?php echo $age2; ?>ans
<?php echo ($sexe2) ? " et c'est un homme" : "et c'est une femme"; ?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
