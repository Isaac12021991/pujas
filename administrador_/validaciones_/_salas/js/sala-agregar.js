$(document).ready(function(){


  $('#sala-agregar').click(function(){
    let formData = new FormData();

    /* SALAS */
    let numero_sala = $('#numero_sala').val();
    formData.append('numero_sala',numero_sala);

    let tipo_remate = $('#tipo_remate').val();
    formData.append('tipo_remate',tipo_remate);

    let anuncio1 = $('#anuncio1').val();
    formData.append('anuncio1',anuncio1);

    let anuncio2 = $('#anuncio2').val();
    formData.append('anuncio2',anuncio2);

    let hipodromo = $('#hipodromo').val();
    formData.append('hipodromo',hipodromo);

    let distancia = $('#distancia').val();
    formData.append('distancia',distancia);

    let pote_tablazo = $('#pote_tablazo').val();
    formData.append('pote_tablazo',pote_tablazo);

    let pote = $('#pote').val();
    formData.append('pote',pote);
    /* SALAS */


    /* TABLAS */

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar1 = $('#nombre_ejemplar1').val();
    formData.append('nombre_ejemplar1',nombre_ejemplar1);

    /*-------------------CAMPO------------------------*/

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar2 = $('#nombre_ejemplar2').val();
    formData.append('nombre_ejemplar2',nombre_ejemplar2);
    
    /*-------------------CAMPO------------------------*/

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar3 = $('#nombre_ejemplar3').val();
    formData.append('nombre_ejemplar3',nombre_ejemplar3);
    
    /*-------------------CAMPO------------------------*/

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar4 = $('#nombre_ejemplar4').val();
    formData.append('nombre_ejemplar4',nombre_ejemplar4);
    
    /*-------------------CAMPO------------------------*/

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar5 = $('#nombre_ejemplar5').val();
    formData.append('nombre_ejemplar5',nombre_ejemplar5);
    
    /*-------------------CAMPO------------------------*/

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar6 = $('#nombre_ejemplar6').val();
    formData.append('nombre_ejemplar6',nombre_ejemplar6);
    
    /*-------------------CAMPO------------------------*/

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar7 = $('#nombre_ejemplar7').val();
    formData.append('nombre_ejemplar7',nombre_ejemplar7);
    
    /*-------------------CAMPO------------------------*/

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar8 = $('#nombre_ejemplar8').val();
    formData.append('nombre_ejemplar8',nombre_ejemplar8);
    
    /*-------------------CAMPO------------------------*/

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar9 = $('#nombre_ejemplar9').val();
    formData.append('nombre_ejemplar9',nombre_ejemplar9);
    
    /*-------------------CAMPO------------------------*/

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar10 = $('#nombre_ejemplar10').val();
    formData.append('nombre_ejemplar10',nombre_ejemplar10);
    
    /*-------------------CAMPO------------------------*/

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar11 = $('#nombre_ejemplar11').val();
    formData.append('nombre_ejemplar11',nombre_ejemplar11);
    
    /*-------------------CAMPO------------------------*/

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar12 = $('#nombre_ejemplar12').val();
    formData.append('nombre_ejemplar12',nombre_ejemplar12);
    
    /*-------------------CAMPO------------------------*/

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar13 = $('#nombre_ejemplar13').val();
    formData.append('nombre_ejemplar13',nombre_ejemplar13);
    
    /*-------------------CAMPO------------------------*/

    /*-------------------CAMPO------------------------*/
    let nombre_ejemplar14 = $('#nombre_ejemplar14').val();
    formData.append('nombre_ejemplar14',nombre_ejemplar14);
    
    /*-------------------CAMPO------------------------*/

    /* TABLAS */


    if (numero_sala == '') {

     Swal.fire(
      'INGRESA EL NUMERO DE REMATE',
      '',
      'warning'
      )

   }else if (tipo_remate == '') {

     Swal.fire(
      'INGRESA EL TIPO DE REMATE',
      '',
      'warning'
      )

   }else if (anuncio1 == '') {

     Swal.fire(
      'INGRESA EL TEXTO DEL ANUNCIO 1',
      '',
      'warning'
      )

   }else if (hipodromo == '') {

     Swal.fire(
      'INGRESA HIPODROMO',
      '',
      'warning'
      )

   }else if (distancia == '') {

     Swal.fire(
      'INGRESA LA DISTANCIA DE LA CARRERA',
      '',
      'warning'
      )

   }else if (pote_tablazo == '') {

     Swal.fire(
      'INGRESA EL POTE TABLAZO DE LA SALA',
      '',
      'warning'
      )

   }else if (pote == '') {

     Swal.fire(
      'INGRESA EL POTE DE LA SALA',
      '',
      'warning'
      )

   }else{
    $.ajax({
      url: 'validaciones_/_salas/sala-agregar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
        if (data==0) {

         Swal.fire(
          'CARRERA AGREGADA CON EXITO',
          '',
          'success'
          ).then(function() {
            window.location = "salas";
          });

        }
       //SALDO CORRECTO


        //SALDO CORRECTO
        else if (data==1) {

         Swal.fire(
          'EL NUMERO DE REMATE YA EXISTE',
          '',
          'warning'
          )

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

