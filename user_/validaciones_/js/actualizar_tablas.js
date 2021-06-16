	$(document).ready(function() {
		var refreshId = setInterval(function() {
			$("#tabla_1").load("validaciones_/tabla_1");
		}, 1000);			
	});

	$(document).ready(function() {
		var refreshId = setInterval(function() {
			$("#finalizo").load("validaciones_/tabla_1_");
		}, 1000);			
	});

	$(document).ready(function() {
		var refreshId = setInterval(function() {
			$("#total_tablas").load("validaciones_/total_tablas");
		}, 1000);			
	});

		$(document).ready(function() {
		var refreshId = setInterval(function() {
			$("#finalizo_total").load("validaciones_/total_tablas_");
		}, 1000);			
	});