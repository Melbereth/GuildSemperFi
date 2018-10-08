<?php

require ('../model/Trade.php');
$recup = New Trade();

      $tblNP = json_decode($_POST['TBLnomP']);
      $tblQP = json_decode($_POST['TBLnumP']);
      $tblNB = json_decode($_POST['TBLnomB']);
      $tblQB = json_decode($_POST['TBLnumB']);
      $auto->envoip($tblNP,$tblQP);
      $auto->envoib($tblNB, $tblQB);





 ?>
