<?php ob_start(); //NE PAS MODIFIER
$titre = 'Exo 1 : Variables'; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<div class="container">
    <div class="row">
        <div class="col-12">
            ************* AVANT PERMUTATION *************
        </div>
        <div class="col-12">
            <?php
                $a = 3;
                $b = 5;
                $c = 7;
                echo 'A : '.$a.'<br>'.
                    'B : '.$b.'<br>'.
                    'C : '.$c.'<br>';
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            ************* APRES PERMUTATION *************
        </div>
        <div class="col-12">
            <?php
                $tmp = $a;
                $a = $b;
                $b = $c;
                $c = $tmp;
                echo 'A : '.$a.'<br>'.
                    'B : '.$b.'<br>'.
                    'C : '.$c.'<br>';
            ?>
        </div>
    </div>
</div>

<?php
/*
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 */
    $content = ob_get_clean();

    require '../../global/common/template.php';
