<?php

require ('Trade.php');
$auto = New Trade();
// $auto->cherche($_POST['term']);

$tblNP = json_decode($_POST['TBLnomP']);
$tblQP = json_decode($_POST['TBLnumP']);
$tblNB = json_decode($_POST['TBLnomB']);
$tblQB = json_decode($_POST['TBLnumB']);
$auto->envoip($tblNP[0],$tblQP[0]);
$auto->envoib($tblNB[0], $tblQB[0]);



 ?>
