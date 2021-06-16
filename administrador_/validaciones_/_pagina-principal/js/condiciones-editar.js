$('#actualizar-condiciones').click(function() {

  let condiciones      = $('#condiciones').val();

  if (condiciones == '') {
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
     title: 'INGRESA LAS CONDICIONES'
   });

  }else{
    $.ajax({
      type: 'POST',
      url: 'validaciones_/_pagina-principal/condiciones-editar',
      data: {condiciones: condiciones},
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
                 title: 'CONDICIONES EDITADAS CON EXITO'
               }).then(function() {
                window.location = "pagina-principal";
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