DOUBLE = {

  count: 2,
  count2: 2,



    INIT : function() {
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
            var test = document.querySelector('#exemB');
            test = test.cloneNode(true);
            test.children[0].name = "nom" + DOUBLE.count;
            test.children[1].name = "num" + DOUBLE.count;
            document.querySelector('.proposition').appendChild(test);
            DOUBLE.count++;
            document.getElementById('newB').disabled = false;
          } else {
            document.getElementById('newB').disabled = true;
          }
        },

          // Génére jusqu'à deux div Besoin en + pour plus d'entrée
      newBes: function() {
          if(DOUBLE.count2 <= 3) {
            var test = document.querySelector('#exem');
            test = test.cloneNode(true);
            test.children[0].name = "need" + DOUBLE.count2;
            test.children[1].name = "numb" + DOUBLE.count2;
            document.querySelector('.besoin').appendChild(test);
            DOUBLE.count2++;
            document.getElementById('newB2').disabled = false;
          } else {
            document.getElementById('newB2').disabled = true;
          }

       },

          // Récupération des valeurs saisies dans l'input
       infos: function() {

         var recup = document.querySelectorAll(".recuperer");
         for (i=0; i<recup.length; i++) {

            if(recup[i].value.length != "") {
              console.log(recup[i].value);
            }
          }
       }



}

window.onload = DOUBLE.INIT();
