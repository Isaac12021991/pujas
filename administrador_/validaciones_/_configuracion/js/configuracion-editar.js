$('#editar-config').click(function() {
  let tiempo_puja      = $('#tiempo_puja').val();

  if (tiempo_puja == '') {
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
      url: 'validaciones_/_configuracion/configuracion-editar',
      data: {tiempo_puja: tiempo_puja},
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
                 title: 'CONFIGURACIÓN EDITADA CON EXITO'
               }).then(function() {
                window.location = "configuracion";
              });
             }
          //EDITADO CORRECTO



            //EDITADO SIN VALOR
            else if (data==1) {

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
               type: 'warning',
               title: 'EL TIEMPO DEBE SER MAYOR A 0'
             })
            }
            //EDITADO SIN VALOR

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