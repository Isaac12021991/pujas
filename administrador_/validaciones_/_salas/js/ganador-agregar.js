$(document).ready(function(){


  $('#agregar-ganador').click(function(){
    let formData = new FormData();

    let id_sala3 = $('#id_sala3').val();
    formData.append('id_sala3',id_sala3);

    let primer_lugar = $('#primer_lugar').val();
    formData.append('primer_lugar',primer_lugar);



    if (primer_lugar == '') {

     Swal.fire(
      'INGRESA EL GANADOR AL PRIMER LUGAR',
      '',
      'warning'
      )

   }else{
    $.ajax({
      url: 'validaciones_/_salas/ganador-agregar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //GANADOR CORRECTO
        if (data==0) {

         Swal.fire(
          'GANADORES AGREGADOS CON EXITO',
          '',
          'success'
          ).then(function() {
            window.location = "salas";
          });

        }
       //GANADOR CORRECTO


        //GANADOR YA EXISTE
        else if (data==1) {

         Swal.fire(
          'ESTE REMATE YA TIENE GANADORES',
          '',
          'error'
          ).then(function() {
            window.location = "salas";
          });

        }
       //GANADOR YA EXISTE


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

