$('#editar-config').click(function() {
  let porcentaje      = $('#porcentaje').val();

  if (porcentaje == '') {
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
     title: 'INGRESA EL TIEMPO (EN MINUTOS)'
   });

  }else{
    $.ajax({
      type: 'POST',
      url: 'validaciones_/_configuracion_porcentaje/configuracion-editar',
      data: {porcentaje: porcentaje},
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
                 title: 'PORCENTAJE EDITADO CON EXITO'
               }).then(function() {
                window.location = "configuracion-porcentaje";
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