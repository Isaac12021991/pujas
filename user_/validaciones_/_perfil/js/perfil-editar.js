$('#actualizar-perfil').click(function() {

  let nombre_apellido = $('#nombre_apellido').val();

  let usuario = $('#usuario').val();

  let email = $('#email').val();

  if (nombre_apellido == '') {
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
     type: 'warning',
     title: 'INGRESA EL NOMBRE Y APELLIDO'
   });

  }else if (usuario == '') {
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
     type: 'warning',
     title: 'INGRESA EL USUARIO'
   });

  }else if (email == '') {
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
     type: 'warning',
     title: 'INGRESA EL CORREO'
   });

  }else if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1){
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
     type: 'warning',
     title: 'INGRESA UN CORREO VALIDO'
   });    

  }else{
    $.ajax({
      type: 'POST',
      url: 'validaciones_/_perfil/perfil-editar',
      data: {nombre_apellido: nombre_apellido, usuario: usuario, email: email},
      success: function(data){

              //EDITADO CORRECTO
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
                 type: 'success',
                 title: 'SU PERFIL SE EDITO CON EXITO'
               }).then(function() {
                window.location = "perfil";
              });
             }
          //EDITADO CORRECTO

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
             title: 'DATOS INCORRECTOS'
           });
          }



        },
      });
  }
});