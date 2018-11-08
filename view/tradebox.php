<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TradeWoW</title>
    <link rel="stylesheet" href="../public/css/styletrade.css">

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
        <form>


            <div data-loc="proposition" id="proposition">

                  <div data-family='p1' class="objet" id="exem">
                    <input data-family='p1' id="nomp1" type="text" class="search" data-champ="nom" name="nom1" placeholder="Nom de plante" autocomplete="off"/>
                    <div data-family='p1' class="result" id="resultp1"></div>
                    <input data-family='p1' type="number" data-champ="num" id="nump1" placeholder="Nombre" autocomplete="off"/>


                  </div>

            </div>
            <button type="button" id="newB" name="bouton">New input</button>

            <div data-loc="besoin" id="besoin">

              <div data-family='b1' class="objet" id="exemB">
                <input data-family='b1' type="text" class="search" data-champ="nom" name="need1" placeholder="Plante" autocomplete="off"/>
                <div data-family='b1' class="result" id="resultb1"></div>
                <input data-family='b1' type="number" data-champ="num" name="numb1" placeholder="Nombre" autocomplete="off"/>

              </div>

            </div>

            <button type="button" id="newB2" name="bouton">New input</button><br>


            <input type="button" id="BTNtrade" name="envoyer" value="Proposer le trade">
        </form>
          </div>

      <script type="text/javascript" src="../public/js/tradejs.js"></script>
      <script  src="../public/js/complete.js" type="text/javascript"></script>

  </body>
</html>
