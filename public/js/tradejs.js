INIT = {
  init: function() {
    DOUBLE.init();
  }

},

DOUBLE = {

  count: 2,
  count2: 2,



    init : function() {
      var BTNplus = document.getElementById('BTNplus');
      BTNplus.addEventListener('click', DOUBLE.show);
      var BTNtrade = document.getElementById('BTNtrade');
      BTNtrade.addEventListener('click', DOUBLE.infos);
      document.querySelector('#newB').addEventListener('click',DOUBLE.newPut);
      document.querySelector('#newB2').addEventListener('click',DOUBLE.newBes);
    },


      // Afficher la div caché pour nouvel ajout
     show: function() {
            var montre = document.getElementById('cache');
            if (montre.style.display === 'block') {
              montre.style.display = 'none';
            } else {
              montre.style.display = 'block';
            }

       },

        // Génére jusqu'à deux div Proposition en + pour plus d'entrée
      newPut: function() {
          if(DOUBLE.count <= 3) {
            var test = document.querySelector('#exem');
            test = test.cloneNode(true);
            test.children[0].name = "nom" + DOUBLE.count;
            test.children[1].id = "resultp" + DOUBLE.count;
            test.children[2].name = "num" + DOUBLE.count;
            document.getElementById('proposition').appendChild(test);
            DOUBLE.count++;
            document.getElementById('newB').disabled = false;
          } else {
            document.getElementById('newB').disabled = true;
          }
        },

          // Génére jusqu'à deux div Besoin en + pour plus d'entrée
      newBes: function() {
          if(DOUBLE.count2 <= 3) {
            var test = document.querySelector('#exemB');
            test = test.cloneNode(true);
            test.children[0].name = "need" + DOUBLE.count2;
            test.children[1].id = "resultb" + DOUBLE.count2;
            test.children[2].name = "numb" + DOUBLE.count2;
            document.getElementById('besoin').appendChild(test);
            DOUBLE.count2++;
            document.getElementById('newB2').disabled = false;
          } else {
            document.getElementById('newB2').disabled = true;
          }

       },

          // Récupération des valeurs localisation + input
       infos: function() {

         var recupPropo   = document.querySelector("div[data-loc=proposition]");
         var recupBesoin  = document.querySelector("div[data-loc=besoin]");
         var propoNom     = recupPropo.querySelectorAll("input[data-champ=nom]");
         var propoNum     = recupPropo.querySelectorAll("input[data-champ=num]");
         var besoinNom    = recupBesoin.querySelectorAll("input[data-champ=nom]");
         var besoinNum    = recupBesoin.querySelectorAll("input[data-champ=num]");
         var TBLnomP      = [];
         var TBLnumP      = [];
         var TBLnomB      = [];
         var TBLnumB      = [];

        for(i=0;i<propoNom.length;i++){
          TBLnomP.push(propoNom[i].value);
          TBLnumP.push(propoNum[i].value);
        }
        for(i=0;i<besoinNom.length;i++){
          TBLnomB.push(besoinNom[i].value);
          TBLnumB.push(besoinNum[i].value);
        }

         var variables = "TBLnomP=".concat(JSON.stringify(TBLnomP));
         variables = variables.concat("&TBLnumP=");
         variables = variables.concat(JSON.stringify(TBLnumP));
         variables = variables.concat("&TBLnomB=");
         variables = variables.concat(JSON.stringify(TBLnomB));
         variables = variables.concat("&TBLnumB=");
         variables = variables.concat(JSON.stringify(TBLnumB));
          DOUBLE.requete(variables);
          console.log(variables);

       },

       // Ajax
       requete : function(variables) {
        var xhrw = new XMLHttpRequest();
        xhrw.onreadystatechange = function() {
            if (xhrw.readyState === 4 && xhrw.status === 200) {
              // ici on peut traiter la réponse qui est  contenue dans :  xhrw.responseText
              rep = xhrw.responseText;

            } else if (xhrw.readyState < 4) {
                //wait and see;
            }//endif
        };//end function associated to onreadystatechange


        xhrw.open("POST", "../controller/indextrade.php", true);
        xhrw.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhrw.send(variables);

    }//end requete



},

AFFICHAGE = {

  init: function() {

  },

  show: function() {

  }


};

window.onload = INIT.init();
