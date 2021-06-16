$(document).ready(function(){


  $('#boletin').click(function(){
    let formData = new FormData();
    let correo_boletin = $('#correo_boletin').val();
    formData.append('correo_boletin',correo_boletin);

    if (correo_boletin == '') {

      Swal.fire(
        'INGRESA TU CORREO',
        '',
        'warning'
        )


    }else if($("#correo_boletin").val().indexOf('@', 0) == -1 || $("#correo_boletin").val().indexOf('.', 0) == -1){

      Swal.fire(
        'INGRESA UN CORREO VALIDO',
        '',
        'warning'
        )   

    }else{
      $.ajax({
        url: 'validaciones_/boletines',
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          parseInt(data);


        //CORREO YA REGISTRADO
        if (data==0) {

          Swal.fire(
            'ESTE CORREO YA ESTÁ REGISTRADO',
            '',
            'info'
            ) 

        }
        //CORREO YA REGISTRADO


        //CORREO CORRECTO
        else if (data==1) {

          Swal.fire(
            'SUSCRIPCIÓN AL BOLETIN CON ÉXITO',
            '',
            'success'
            ).then(function() {
              window.location = "index#suscripcion_con_exito";
            }); 

          }
        //CORREO CORRECTO


        //CUENTA INCORRECTA
        else{

          Swal.fire(
            'HAY UN ERROR CON SU CORREO',
            '',
            'error'
            ) 

        }
        //CUENTA INCORRECTA

      }
    });
    }
  });
});

