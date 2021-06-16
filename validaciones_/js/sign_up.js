$(document).ready(function(){


  $('#sign_up').click(function(){
    let formData = new FormData();

    let nombre_apellido = $('#nombre_apellido').val();
    formData.append('nombre_apellido',nombre_apellido);

    let email = $('#email').val();
    formData.append('email',email);

    let user = $('#user').val();
    formData.append('user',user);

    let pass = $('#pass').val();
    formData.append('pass',pass);


    if (nombre_apellido == '') {

     Swal.fire(
      'INGRESA TU NOMBRE',
      '',
      'warning'
      )

   }else if (email == '') {

     Swal.fire(
      'INGRESA TU EMAIL',
      '',
      'warning'
      )

   }else if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1){

     Swal.fire(
      'EL FORMATO DE EMAIL NO ES CORRECTO',
      '',
      'warning'
      ) 

   }else if (user == '') {

     Swal.fire(
      'INGRESA TU USUARIO',
      '',
      'warning'
      ) 

   }else if (pass == '') {

     Swal.fire(
      'INGRESA TU CONTRASEÑA',
      '',
      'warning'
      )

   }else{
    $.ajax({
      url: 'validaciones_/sign_up',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);

        //CORREO INCORRECTA
        if (data==0) {

         Swal.fire(
          'EL CORREO INGRESADO YA ESTA EN USO',
          '',
          'info'
          )
            
       }
        //CORREO INCORRECTA


        //REGISTRO CORRECTO
        else if (data==1) {

         Swal.fire(
          'CUENTA CREADA CON EXITO',
          '',
          'success'
          ).then(function() {
            window.location = "index";
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
           title: 'CORREO/CONTRASEÑA INCORRECTOS'
         });
        }
        //CUENTA INCORRECTA

      }
    });
  }
});
});

