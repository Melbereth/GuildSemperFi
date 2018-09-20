<?php

class Trade {

  private $bdd;
  private $table = 'Proposition';
  public $add;
  public $i = 0;

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


        // Envoi des valeurs des input à la BDD
      public function envoi($_POST){

        try {

            $this->add = $this->bdd->prepare(
              "INSERT INTO $this->table (pournom1,pournum1,pournom2,pournum2,pournom3,pournum3,contrenom1,contrenum1,contrenom2,contrenum2,contrenom3,contrenum3) VALUES ($valeur)";

              foreach ($_POST as $name => $value) {
                $this->add->bindParam(":name$i", $name . $i);
                $this->add->bindParam(":value$i", $value . $i);
                $valeur += ":name$i, :value$i";
                $i++;
              }

            $this->add->execute();

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
