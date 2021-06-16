	$(document).ready(function() {
		var refreshId = setInterval(function() {
			$("#salas_actualizadas").load("validaciones_/salas");
		}, 1000);			
	});

	$(document).ready(function() {
		var refreshId = setInterval(function() {
			$("#salas_lista_actualizadas").load("validaciones_/salas_lista");
		}, 1000);			
	});
