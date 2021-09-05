<?php ob_start(); //NE PAS MODIFIER
$titre = 'Méthode POST'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<form action="" method="POST">
    <div class="form-group">
        <label>Chiffre :</label>
        <input type="text" name="chiffre" class="form-control">
    </div>
    <input type="submit" value="Envoyer" class="btn btn-primary">
</form>

<?php

if (isset($_POST['chiffre']) && !empty($_POST['chiffre'])) {
    if (0 == $_POST['chiffre'] % 2) {
        echo 'Le chiffre saisie est pair';
    } else {
        echo 'Le chiffre saise est impair';
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
