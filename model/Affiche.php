<?php

require ('../model/Trade.php');

  class Affiche extends Trade  {

    public function __construct(){
        parent::__construct();

        $this->connexion();

    }


    // Autocomplétion, récupération bdd

      public function cherche($term) {

            $this->term = $term;
            // echo "php".$_POST['term'];
            $requete = $this->bdd->prepare("SELECT * FROM Plantes WHERE nom LIKE :term"); // j'effectue ma requête SQL grâce au mot-clé LIKE
            $requete->execute(array('term' => '%'.$this->term.'%'));

            $reponse = array(); // on créé le tableau

            while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
            {
                array_push($reponse, $donnee['nom']); // et on ajoute celles-ci à notre tableau
            }


            echo json_encode($reponse); // il n'y a plus qu'à convertir en JSON

        }

    // public function show(){
    //
    // }
}
