$('#enviar-respuesta').click(function() {

  let id_soporte      = $('#id_soporte').val();
  let respuesta      = $('#respuesta').val();

  if (respuesta == '') {
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
     title: 'INGRESA LA RESPUESTA'
   });

  }else{
    $.ajax({
      type: 'POST',
      url: 'validaciones_/_soporte/soporte-editar',
      data: {id_soporte: id_soporte, respuesta: respuesta},
      success: function(data){

              //EDITADO CORRECTO
              if (data==0) {

                const Toast = Swal.mixin({
                 toast: true,
                 position: 'top-end',
                 showConfirmButton: false,
                 timer: 1000,
                 timerProgressBar: true,
                 didOpen: (toast) => {
                   toast.addEventListener('mouseenter', Swal.stopTimer)
                   toast.addEventListener('mouseleave', Swal.resumeTimer)
                 }
               })

                Toast.fire({
                 type: 'success',
                 title: 'MENSAJE ENVIADO CON EXITO'
               }).then(function() {
                window.location = "soporte";
              });
             }
          //EDITADO CORRECTO


          else{
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
             type: 'error',
             title: 'DATOS INCORRECTOS'
           });
          }



        },
      });
  }
});