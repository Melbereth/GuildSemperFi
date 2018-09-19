<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styletrade.css">

  </head>
  <body>
    <div id="boxtrade">
      <div id="newcontenu">
        <p>#Balance ton trade :)</p>
      </div>


      <div id="boutonplus">
        <button type="button" id="BTNplus" class="BTNplus" name="button">Ajouter un trade</button>
      </div>
      <div id="cache" class="hidden">
        <form class="" method="post">


            <div class="proposition">

                  <div class="objet" id="exem">
                    <input type="text" class="search recuperer" name="nom1" placeholder="Nom de plante">
                    <input type="number" class="recuperer" name="num1" placeholder="Nombre">
                    <div class="result"></div>
                  </div>

            </div>
            <button type="button" id="newB" name="bouton">New input</button>

            <div class="besoin">

              <div class="objet" id="exemB">
                <input type="text" class="search recuperer" name="need1" placeholder="Plante">
                <input type="number" class="recuperer" name="numb1" placeholder="Nombre">
                <div class="result"></div>
              </div>

            </div>

            <button type="button" id="newB2" name="bouton">New input</button><br>


            <input type="submit" id="BTNtrade" name="envoyer" value="Proposer le trade">
        </form>
          </div>

      <script type="text/javascript" src="tradejs.js"></script>
      <!-- <script  src="complete.js" type="text/javascript"></script> -->

  </body>
</html>
