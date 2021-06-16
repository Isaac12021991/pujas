$('#actualizar-reglamento').click(function() {

  let reglamento      = $('#reglamento').val();

  if (reglamento == '') {
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
     title: 'INGRESA EL REGLAMENTO'
   });

  }else{
    $.ajax({
      type: 'POST',
      url: 'validaciones_/_pagina-principal/reglamento-editar',
      data: {reglamento: reglamento},
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
                 title: 'REGLAMENTO EDITADO CON EXITO'
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