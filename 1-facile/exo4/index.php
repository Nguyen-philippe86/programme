<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 4 : Les tests'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$chiffre1 = rand(1, 100);
$chiffre2 = rand(1, 100);

echo "Chiffre 1 : <b>{$chiffre1}</b><br/>";
echo "Chiffre 2 : <b>{$chiffre2}</b><br/>";

$result = abs($chiffre1 - $chiffre2);

if ($result > 25 && $result < 75) {
    echo "La valeur absolue : {$chiffre1} - {$chiffre2} = {$result},<b> est compris</b> entre 25 et 75.";
} else {
    echo "La valeur absolue : {$chiffre1} - {$chiffre2} = {$result},<b> n'est pas compris</b> entre 25 et 75.";
}

?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
