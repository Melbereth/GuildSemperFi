<?php

class Trade {

  public $bdd;
  public $servername = '';
  public $username = "";
  public $password = "";
  public $dbname = "";
  public $i = 0;
  public $loc1 = 0;
  public $loc2 = 1;
  public $lii;
  public $term;


  public function __construct(){
    $this->servername = 'localhost';
    $this->username = "admin";
    $this->password = "admin";
    $this->dbname = "trade";
  }


    // Connection à la bdd

      public function connexion(){


              try{
                  $this->bdd = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

              }

              catch(Exception $e) {
                  die('Erreur : '.$e->getMessage());
              }


    }


      // récupération du last id de la table idnext
    public function idtroc($idu){
      $troc = $this->bdd->prepare("INSERT INTO idnext (id_user) VALUES($idu)");
      $troc->execute();
      return $this->bdd->lastInsertId();
    }


        // Envoi des valeurs de proposition à la bdd
      public function envoip($propoN, $propoQ){

        try {


            $add = $this->bdd->prepare(
              "INSERT INTO Proposition (id_troc,troc,quantite,location) VALUES (:IDTROC,:TROC,:QTE,:LOC)");
              $idu =2; // uniquement pour test
              $this->lii = $this->idtroc($idu);

              $add->bindParam(':IDTROC', $this->lii);
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
              "INSERT INTO Proposition (id_troc,troc,quantite,location) VALUES (:IDTROC,:TROC,:QTE,:LOC)");

              $add1->bindParam(':IDTROC', $this->lii);
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

    }



?>
