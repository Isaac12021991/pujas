$(document).ready(function(){


	$('#recover').click(function(){
		let formData = new FormData();

		let correo = $('#correo').val();
		formData.append('correo',correo);


		if (correo == '') {

            Swal.fire(
                'INGRESA TU CORREO',
                '',
                'warning'
                ).then(function() {
                    window.location = "restablecer";
                });


            }else if($("#correo").val().indexOf('@', 0) == -1 || $("#correo").val().indexOf('.', 0) == -1){

               Swal.fire(
                'INGRESA UN CORREO VALIDO',
                '',
                'warning'
                ).then(function() {
                    window.location = "restablecer";
                });


            }else{
               $.ajax({
                url: 'restablecer_/recover',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                 parseInt(data);

                //CORREO INCORRECTA
                if (data==0) {
                	const Toast = Swal.mixin({
                		toast: true,
                		position: 'top-end',
                		showConfirmButton: false,
                		timer: 2000,
                		timerProgressBar: true,
                		didOpen: (toast) => {
                			toast.addEventListener('mouseenter', Swal.stopTimer)
                			toast.addEventListener('mouseleave', Swal.resumeTimer)
                		}
                	})

                	Toast.fire({
                		type: 'info',
                		title: 'EL CORREO INGRESADO NO EXISTE'
                	}).then(function() {
                        window.location = "restablecer";
                    });
                }
                //CORREO INCORRECTA


                //REGISTRO CORRECTO
                else if (data==1) {

                	Swal.fire(
                		'CORREO ENVIADO',
                		'ENVIAMOS UN LINK A TU CORREO PARA QUE RESTABLEZCAS TU CONTRASEÑA',
                		'success'
                		).then(function() {
                			window.location = "restablecer";
                		});

                	}
                //REGISTRO CORRECTO



                //CUENTA INCORRECTA
                else{
                	const Toast = Swal.mixin({
                		toast: true,
                		position: 'top-end',
                		showConfirmButton: false,
                		timer: 3000,
                		timerProgressBar: true,
                		didOpen: (toast) => {
                			toast.addEventListener('mouseenter', Swal.stopTimer)
                			toast.addEventListener('mouseleave', Swal.resumeTimer)
                		}
                	})

                	Toast.fire({
                		type: 'error',
                		title: 'CORREO INCORRECTO'
                	});
                }
                //CUENTA INCORRECTA

            }
        });
           }
       });
});

