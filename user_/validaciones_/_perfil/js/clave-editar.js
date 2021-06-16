$('#actualizar-clave').click(function() {

  let clave_actual = $('#clave_actual').val();

  let clave_nueva = $('#clave_nueva').val();

  let clave_nueva_r = $('#clave_nueva_r').val();


  if (clave_actual == '') {
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
     title: 'INGRESA LA CONTRASEÑA ACTUAL'
   });

  }else if (clave_nueva == '') {
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
     title: 'INGRESA LA NUEVA CONTRASEÑA'
   });

  }else if (clave_nueva_r == '') {
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
     title: 'REPITE LA NUEVA CONTRASEÑA'
   });

  }else{
    $.ajax({
      type: 'POST',
      url: 'validaciones_/_perfil/clave-editar',
      data: {clave_actual: clave_actual, clave_nueva: clave_nueva, clave_nueva_r: clave_nueva_r},
      success: function(data){

            //ERROR
            if (data==0) {

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
               title: 'SU CONTRASEÑA ACTUAL ES INCORRECTA'
             });
            }
          //ERROR


           //ERROR
           else if (data==1) {

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
             title: 'SUS CONTRASEÑAS NO SON IGUALES'
           });
          }
          //ERROR


         //EDITADO CORRECTO
         else if (data==2) {

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
           title: 'SU CONTRASEÑA SE ACTUALIZO CON EXITO'
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