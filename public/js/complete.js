AUTO = {


	INIT : function() {

		var tbl = document.querySelectorAll('.search');
		tbl.forEach(index=>index.addEventListener("keyup", AUTO.ajax));


	},

  ajax: function(e) {
		var cible = e.target;
		var demande = e.target.value;
		var envoi = document.querySelector(".result");
		console.log(envoi);
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function() {

      var rep = JSON.parse(xhttp.responseText);
			console.log(rep);
			for (i=0;i<rep.length;i++) {
				cible.nextElementSibling.nextElementSibling.innerHTML += rep[i] + '<br>';
			}

    };

		xhttp.open("POST", "../controller/controller.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send('term='.concat(demande));

  }


};

window.onload = AUTO.INIT;