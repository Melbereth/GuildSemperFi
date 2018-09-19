<?php

class Trade {

  private $bdd;
  // public $term;


    // Connection à la bdd

      public function Trade(){


              try{
                  $this->bdd = new PDO('mysql:host=localhost;dbname=trade', 'admin', 'admin');

              }

              catch(Except.ion $e) {
                  die('Erreur : '.$e->getMessage());
              }


    },

        // Envoi des valeurs des input à la BDD
      public function envoi($pnom1,$pnum1,$pnom2,$pnum2,$pnom3,$pnum3,$cnom1,$cnum1,$cnom2,$cnum2,$cnom3,$cnum3){

        try {

            $add = $this->bdd->prepare(
              "INSERT INTO Proposition (pournom1,pournum1,pournom2,pournum2,pournom3,pournum3,contrenom1,contrenum1,contrenom2,contrenum2,contrenom3,contrenum3) VALUES (:pnom1,:pnum1,:pnom2,:pnum2,:pnom3,:pnum3,:cnom1,:cnum1,:cnom2,:cnum2,:cnom3,:cnum3)");
            $add->bindParam(':pnom1', $pnom1);
            $add->bindParam(':pnum1', $pnum1);
            $add->bindParam(':pnom2', $pnom2);
            $add->bindParam(':pnum2', $pnum2);
            $add->bindParam(':pnom3', $pnom3);
            $add->bindParam(':pnum3', $pnum3);
            $add->bindParam(':cnom1', $cnom1);
            $add->bindParam(':cnum1', $cnum1);
            $add->bindParam(':cnom2', $cnom2);
            $add->bindParam(':cnum2', $cnum2);
            $add->bindParam(':cnom3', $cnom3);
            $add->bindParam(':cnum3', $cnum3);
            $add->execute();

          } catch(PDOexception $e){

            echo "Newton vous m'entendez?";

          }


      },

      // Autocomplétion, récupération bdd

        // public function cherche($term) {
        //
        //       $this->term = $term;
        //       // echo "php".$_POST['term'];
        //       $requete = $this->bdd->prepare("SELECT * FROM Plantes WHERE nom LIKE :term"); // j'effectue ma requête SQL grâce au mot-clé LIKE
        //       $requete->execute(array('term' => '%'.$this->term.'%'));
        //
        //       $reponse = array(); // on créé le tableau
        //
        //       while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
        //       {
        //           array_push($reponse, $donnee['nom']); // et on ajoute celles-ci à notre tableau
        //       }
        //
        //
        //       echo json_encode($reponse); // il n'y a plus qu'à convertir en JSON
        //
        //   }


    }



?>
