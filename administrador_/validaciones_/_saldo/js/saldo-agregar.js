$(document).ready(function(){


  $('#saldo-agregar').click(function(){
    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let saldo = $('#saldo').val();
    formData.append('saldo',saldo);

    if (saldo == '') {

     Swal.fire(
      'INGRESA EL SALDO $$',
      '',
      'warning'
      )

   }else{
    $.ajax({
      url: 'validaciones_/_saldo/saldo-agregar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
        if (data==0) {

         Swal.fire(
          'SALDO AGREGADO CON EXITO',
          '',
          'success'
          ).then(function() {
            window.location = "usuarios";
          });

        }
       //SALDO CORRECTO



        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ERROR AL AGREGAR',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
});

