$('#sala-editar').click(function() {

  let id_sala      = $('#id_sala').val();


  /* TABLAS */

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar1 = $('#nombre_ejemplar1').val();
  /*-------------------CAMPO------------------------*/

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar2 = $('#nombre_ejemplar2').val();
  /*-------------------CAMPO------------------------*/

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar3 = $('#nombre_ejemplar3').val();
  /*-------------------CAMPO------------------------*/

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar4 = $('#nombre_ejemplar4').val();
  /*-------------------CAMPO------------------------*/

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar5 = $('#nombre_ejemplar5').val();
  /*-------------------CAMPO------------------------*/

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar6 = $('#nombre_ejemplar6').val();
  /*-------------------CAMPO------------------------*/

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar7 = $('#nombre_ejemplar7').val();
  /*-------------------CAMPO------------------------*/

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar8 = $('#nombre_ejemplar8').val();
  /*-------------------CAMPO------------------------*/

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar9 = $('#nombre_ejemplar9').val();
  /*-------------------CAMPO------------------------*/

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar10 = $('#nombre_ejemplar10').val();
  /*-------------------CAMPO------------------------*/

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar11 = $('#nombre_ejemplar11').val();
  /*-------------------CAMPO------------------------*/

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar12 = $('#nombre_ejemplar12').val();
  /*-------------------CAMPO------------------------*/

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar13 = $('#nombre_ejemplar13').val();
  /*-------------------CAMPO------------------------*/

  /*-------------------CAMPO------------------------*/
  let nombre_ejemplar14 = $('#nombre_ejemplar14').val();
  /*-------------------CAMPO------------------------*/

  /* TABLAS */


  if (id_sala == '') {
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
     title: 'NUMERO DE SALA ERRONEO'
   });

  }else{
    $.ajax({
      type: 'POST',
      url: 'validaciones_/_salas/sala-editar-campos',
      data: {id_sala: id_sala, nombre_ejemplar1: nombre_ejemplar1, nombre_ejemplar2: nombre_ejemplar2, nombre_ejemplar3: nombre_ejemplar3, nombre_ejemplar4: nombre_ejemplar4, nombre_ejemplar5: nombre_ejemplar5, nombre_ejemplar6: nombre_ejemplar6, nombre_ejemplar7: nombre_ejemplar7, nombre_ejemplar8: nombre_ejemplar8, nombre_ejemplar9: nombre_ejemplar9, nombre_ejemplar10: nombre_ejemplar10, nombre_ejemplar11: nombre_ejemplar11, nombre_ejemplar12: nombre_ejemplar12, nombre_ejemplar13: nombre_ejemplar13, nombre_ejemplar14: nombre_ejemplar14},
      success: function(data){

        //EDITADO CORRECTO
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
           type: 'success',
           title: 'REMATE EDITADO CON EXITO'
         }).then(function() {
          window.location = "salas";
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