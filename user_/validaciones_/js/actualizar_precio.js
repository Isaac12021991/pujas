	$(document).ready(function() {
		var refreshId = setInterval(function() {
			$("#saldo").load("validaciones_/saldo");
		}, 1000);			
	});

	$(document).ready(function() {
		var refreshId = setInterval(function() {
			$("#saldo2").load("validaciones_/saldo2");
		}, 1000);			
	});

