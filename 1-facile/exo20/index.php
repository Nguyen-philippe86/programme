<?php ob_start(); //NE PAS MODIFIER
$titre = 'Formulaire et tableaux'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<form action="" method="POST">
    <div class="form-group">
        <label>Note 1 :</label>
        <input type="number" name="note1" class="form-control">
    </div>
    <div class="form-group">
        <label>Note 2 :</label>
        <input type="number" name="note2" class="form-control">
    </div>
    <div class="form-group">
        <label>Note 3 :</label>
        <input type="number" name="note3" class="form-control">
    </div>
    <input type="submit" value="Envoyer" class="btn btn-primary">
</form>

<?php

if (isset($_POST['note1']) && !empty($_POST['note1']) && isset($_POST['note2']) && !empty($_POST['note2']) && isset($_POST['note3']) && !empty($_POST['note3'])) {
    $tab = [$_POST['note1'], $_POST['note2'], $_POST['note3']];
    echo '<b>La moyenne des notes est de : '.array_sum($tab) / count($tab).'</b>';
}

?>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
