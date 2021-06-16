$(document).ready(function(){


  $('#enviar-ticket').click(function(){
    let formData = new FormData();

    let titulo = $('#titulo').val();
    formData.append('titulo',titulo);

    let texto = $('#texto').val();
    formData.append('texto',texto);



    if (titulo == '') {

     Swal.fire(
      'INGRESA EL TITULO',
      '',
      'warning'
      )

   }else if (texto == '') {

     Swal.fire(
      'INGRESA EL TEXTO',
      '',
      'warning'
      )

   }else{
    $.ajax({
      url: 'validaciones_/_soporte/ticket-agregar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //TICKET CORRECTO
        if (data==0) {

         Swal.fire(
          'TICKET ENVIADO CON EXITO',
          '',
          'success'
          ).then(function() {
            window.location = "soporte";
          });

        }
       //TICKET CORRECTO


        //TICKET INCORRECTA
        else{

         Swal.fire(
          'ERROR AL AGREGAR',
          '',
          'error'
          )

       }
       //TICKET INCORRECTA

     }
   });
  }
});
});

