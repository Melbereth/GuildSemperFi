<?php

require ('Trade.php');
$auto = New Trade();
// $auto->cherche($_POST['term']);


    $reponse = $auto->envoi($_POST['proposition'], ($_POST['besoin']), $_POST['id troc'],$_POST['quantite'], $_POST['id user'])



 ?>
