<?php

class Trade {

  private $bdd;
  public $i = 0;
  public $loc1 = 0;
  public $loc2 = 1;

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

    public function test(){
      $test = $this->bdd->prepare(
        "SELECT `id_troc` FROM `Proposition` ORDER BY `id_troc` DESC LIMIT 1"
      );
      $test->execute();
      $tout = $test->fetch();
    }


        // Envoi des valeurs de proposition à la bdd
      public function envoip($propoN, $propoQ){

        try {


            $add = $this->bdd->prepare(
              "INSERT INTO Proposition (troc,quantite,location) VALUES (:TROC,:QTE,:LOC)");

              $add->bindParam(':TROC', $trocP);
              $add->bindParam(':QTE', $qteP);
              $add->bindParam(':LOC', $this->loc1);

              // boucle à faire pour envoyer Proposition
              $arr_length = count($propoN);
              for ($i=0;$i<$arr_length;$i++) {
                  $trocP = $propoN[$i];
                  $qteP = $propoQ[$i];
                  $add->execute();
              };


          } catch(PDOexception $e){

            echo "Newton vous m'entendez?";

          }

      }

          // Envoi des valeurs de besoin à la bdd
      public function envoib($besoinN, $besoinQ){

        try {

            $add1 = $this->bdd->prepare(
              "INSERT INTO Proposition (troc,quantite,location) VALUES (:TROC,:QTE,:LOC)");


              $add1->bindParam(':TROC', $trocB);
              $add1->bindParam(':QTE', $qteB);
              $add1->bindParam(':LOC', $this->loc2);

            // boucle à faire pour envoyer Besoin
            $length = count($besoinN);
            for ($i=0;$i<$length;$i++) {
                $trocB = $besoinN[$i];
                $qteB = $besoinQ[$i];
                $add1->execute();
            };




          } catch(PDOexception $e){

            echo "Newton vous m'entendez?";

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
