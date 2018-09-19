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
        <form class="" action="indextrade.php" method="post">


            <div class="proposition">

                  <div class="objet" id="exem">
                    <input type="text" class="search" name="nom1" value="">
                    <input type="number" name="num1" value="">
                    <div class="result"></div>
                  </div>

            </div>
            <button type="button" id="newB" name="bouton">New input</button>

            <div class="besoin">

              <div class="objet" id="exemB">
                <input type="text" class="search" name="need1" value="">
                <input type="number" name="numb1" value="">
                <div class="result"></div>
              </div>

            </div>

            <button type="button" id="newB2" name="bouton">New input</button><br>


            <input type="submit" name="envoyer" value="Proposer le trade">
        </form>
          </div>

      <script type="text/javascript" src="tradejs.js"></script>
      <!-- <script  src="complete.js" type="text/javascript"></script> -->

  </body>
</html>
