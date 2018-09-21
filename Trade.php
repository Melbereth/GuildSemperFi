<?php

class Trade {

  private $bdd;
  private $table = 'Proposition';
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
      public function envoi($tata){

        try {

            $add = $this->bdd->prepare(
              "INSERT INTO $this->table (id_user,id_troc,troc,quantite,location) VALUES (:IDU,:IDT,:TROC,:QTE,:LOC)");

              $add->bindParam(':IDU', $idu);
              $add->bindParam(':IDT', $idt);
              $add->bindParam(':TROC', $troc);
              $add->bindParam(':QTE', $qte);
              $add->bindParam(':LOC', $loc);

              for () {
                $idt
                $troc
              }

            $add->execute();

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
