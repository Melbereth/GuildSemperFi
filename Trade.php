<?php

class Trade {

  private $bdd;
  public $add ="chantal goya";
  public $toto = "pandi panda";
  // public $term;


    // Connection à la bdd

      public function Trade(){


              try{
                  $this->bdd = new PDO('mysql:host=localhost;dbname=trade', 'admin', 'admin');

              }

              catch(Exception $e) {
                  die('Erreur : '.$e->getMessage());
              }


    }


    public function titi() {
      $this->toto="ok";
    }

        // Envoi des valeurs des input à la BDD
      public function envoi($pnom1,$pnum1,$pnom2,$pnum2,$pnom3,$pnum3,$cnom1,$cnum1,$cnom2,$cnum2,$cnom3,$cnum3){
        $this->toto = "tumeféiech";

        try {

            $this->add = $this->bdd->prepare(
              "INSERT INTO Proposition (pournom1,pournum1,pournom2,pournum2,pournom3,pournum3,contrenom1,contrenum1,contrenom2,contrenum2,contrenom3,contrenum3) VALUES (:pnom1,:pnum1,:pnom2,:pnum2,:pnom3,:pnum3,:cnom1,:cnum1,:cnom2,:cnum2,:cnom3,:cnum3)");
            $this->add->bindParam(':pnom1', $pnom1);
            $this->add->bindParam(':pnum1', $pnum1);
            $this->add->bindParam(':pnom2', $pnom2);
            $this->add->bindParam(':pnum2', $pnum2);
            $this->add->bindParam(':pnom3', $pnom3);
            $this->add->bindParam(':pnum3', $pnum3);
            $this->add->bindParam(':cnom1', $cnom1);
            $this->add->bindParam(':cnum1', $cnum1);
            $this->add->bindParam(':cnom2', $cnom2);
            $this->add->bindParam(':cnum2', $cnum2);
            $this->add->bindParam(':cnom3', $cnom3);
            $this->add->bindParam(':cnum3', $cnum3);
            $this->add->execute();

          } catch(PDOexception $e){

            $this->add = "Newton vous m'entendez?";

          }

      }

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
