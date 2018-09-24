<?php

require ('Trade.php');
$auto = New Trade();
// $auto->cherche($_POST['term']);

    $ouii = json_encode($_POST);
    $aremplacer = array('"', '{', '}');
    $remplace = str_replace($aremplacer, "\\", $ouii);
    $nooon = explode("_", $remplace);
    $toto = stripslashes(stripslashes(stripslashes($nooon[0])));
    $titi = explode(",", $toto);
    $tata = explode(":", $titi[0]);
    echo $ouii;
    $reponseP = $auto->envoip($nooon[0]);
    $reponseB = $auto->envoib($nooon[1]);




 ?>
