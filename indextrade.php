<?php

require ('Trade.php');
$auto = New Trade();
// $auto->cherche($_POST['term']);


    $reponse = $auto->envoi($_POST['id_user'], ($_POST['id_troc']), $_POST['contenu'],$_POST['quantite'], $_POST['location']);



 ?>
