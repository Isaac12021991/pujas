$(document).ready(function(){


  $('#login').click(function(){
    let formData = new FormData();
    let usuario = $('#usuario').val();
    let clave = $('#clave').val();
    formData.append('clave',clave);
    formData.append('usuario',usuario);

    if (usuario == '') {
    
    Swal.fire(
  	'INGRESA TU USUARIO',
  	'',
  	'warning'
	  )

    }else if (clave == '') {

    Swal.fire(
  	'INGRESA TU CONTRASEÑA',
  	'',
  	'warning'
	  )

    }else{
      $.ajax({
        url: 'validaciones_/login',
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          parseInt(data);

        //LOGIN ADMIN
        if (data==0) {


        Swal.fire(
        'BIENVENIDO A LATIN CLUB',
        '',
        'success'
        ).then(function() {
            window.location = "administrador_/index";
        });


       }
        //LOGIN ADMIN


        //LOGIN USUARIO
        else if (data==1) {

        Swal.fire(
        'BIENVENIDO A LATIN CLUB',
        '',
        'success'
        ).then(function() {
          window.location = "user_/index";
        });

       }
        //LOGIN USUARIO


        //CUENTA DESACTIVADA
        else if (data==2) {

        Swal.fire(
        'ESTA CUENTA SE ENCUENTRA DESACTIVADA',
        '',
        'info'
        )

        }
        //CUENTA DESACTIVADA


        //CUENTA INCORRECTA
        else if (data==3) {

        Swal.fire(
        'CORREO/CONTRASEÑA INCORRECTOS',
        '',
        'error'
        )
 
        }
        //CUENTA INCORRECTA


        //CUENTA NO EN HORA LABORAL
        else if (data==4) {

        Swal.fire(
        'EN ESTE MOMENTO NO ESTAMOS EN HORA LABORAL',
        '',
        'info'
        )
 
        }
        //CUENTA NO EN HORA LABORAL



        //CUENTA INCORRECTA
        else{

        Swal.fire(
        'CORREO/CONTRASEÑA INCORRECTOS',
        '',
        'error'
        )

        }
        //CUENTA INCORRECTA

      }
    });
    }
  });
});

