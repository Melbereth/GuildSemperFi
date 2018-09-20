<?php

require ('Trade.php');
$auto = New Trade();
// $auto->cherche($_POST['term']);


    $reponse = $auto->envoi($_POST['nom1'], intval($_POST['num1']), $_POST['nom2'],
    intval($_POST['num2']), $_POST['nom3'], intval($_POST['num3']), $_POST['need1'],
    intval($_POST['numb1']), $_POST['need2'], intval($_POST['numb2']),$_POST['need3'],
    intval($_POST['numb3']));



echo ("reponse = $auto->toto");

 ?>
