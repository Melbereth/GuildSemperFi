AUTO = {


	INIT : function() {

		var tbl = document.querySelectorAll('.search');
		tbl.forEach(index=>index.addEventListener("keyup", AUTO.ajax))

	},

  ajax: function(e) {
		console.log(e.target);
		var cible = e.target;
		var demande = e.target.value;
		var envoi = document.querySelector(".result");
		// cible.nextElementSibling.nextElementSi
  case isset ($_POST['envoyer']):bling.innerHTML = "";
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function() {

3

      var rep = JSON.parse(xhttp.responseText);

			console.log(typeof rep);

			for (i=0;i<rep.length;i++) {
				cible.nextElementSibling.nextElementSibling.innerHTML += rep[i] + '<br>';
			}

    }

		xhttp.open("POST", "indextrade.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// console.log(document.getElementById("search").value);
		xhttp.send('term='.concat(demande));

  },


	ecoute: function {

	}



};

window.onload = AUTO.INIT;
