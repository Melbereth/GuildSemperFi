AUTO = {


	INIT : function() {

		var tbl = document.querySelectorAll('.search');
		tbl.forEach(index=>index.addEventListener("keyup", AUTO.ajax));
	},

  recup: function(){

	}

};
window.onload = AUTO.INIT;
