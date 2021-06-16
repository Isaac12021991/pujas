$(document).ready(function(){

//-----------------------------------PUJA-------------------------------------------------
  $('#pujar1').click(function(){

  	$pujar1 = $('#pujar1');

    $pujar1.prop('disabled', true);

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla1 = $('#num_tabla1').val();
    formData.append('num_tabla',num_tabla1);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar1.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE

       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------



//-----------------------------------PUJA-------------------------------------------------
  $('#pujar2').click(function(){

  	$pujar2 = $('#pujar2');

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla2 = $('#num_tabla2').val();
    formData.append('num_tabla',num_tabla2);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar2.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE


       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------


//-----------------------------------PUJA-------------------------------------------------
  $('#pujar3').click(function(){

  	$pujar3 = $('#pujar3');

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla3 = $('#num_tabla3').val();
    formData.append('num_tabla',num_tabla3);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar3.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE


       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------


//-----------------------------------PUJA-------------------------------------------------
  $('#pujar4').click(function(){

  	$pujar4 = $('#pujar4');

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla4 = $('#num_tabla4').val();
    formData.append('num_tabla',num_tabla4);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar4.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE


       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------


//-----------------------------------PUJA-------------------------------------------------
  $('#pujar5').click(function(){

  	$pujar5 = $('#pujar5');

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla5 = $('#num_tabla5').val();
    formData.append('num_tabla',num_tabla5);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar5.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE


       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------



//-----------------------------------PUJA-------------------------------------------------
  $('#pujar6').click(function(){

  	$pujar6 = $('#pujar6');

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla6 = $('#num_tabla6').val();
    formData.append('num_tabla',num_tabla6);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar6.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE


       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------


//-----------------------------------PUJA-------------------------------------------------
  $('#pujar7').click(function(){

  	$pujar7 = $('#pujar7');

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla7 = $('#num_tabla7').val();
    formData.append('num_tabla',num_tabla7);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar7.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE


       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------


//-----------------------------------PUJA-------------------------------------------------
  $('#pujar8').click(function(){

  	$pujar8 = $('#pujar8');

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla8 = $('#num_tabla8').val();
    formData.append('num_tabla',num_tabla8);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar8.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE


       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------


//-----------------------------------PUJA-------------------------------------------------
  $('#pujar9').click(function(){

  	$pujar9 = $('#pujar9');

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla9 = $('#num_tabla9').val();
    formData.append('num_tabla',num_tabla9);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar9.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE


       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------


//-----------------------------------PUJA-------------------------------------------------
  $('#pujar10').click(function(){

  	$pujar10 = $('#pujar10');

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla10 = $('#num_tabla10').val();
    formData.append('num_tabla',num_tabla10);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar10.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE


       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------


//-----------------------------------PUJA-------------------------------------------------
  $('#pujar11').click(function(){

  	$pujar11 = $('#pujar11');

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla11 = $('#num_tabla11').val();
    formData.append('num_tabla',num_tabla11);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar11.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE


       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------


//-----------------------------------PUJA-------------------------------------------------
  $('#pujar12').click(function(){

  	$pujar12 = $('#pujar12');

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla12 = $('#num_tabla12').val();
    formData.append('num_tabla',num_tabla12);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar12.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE


       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------


//-----------------------------------PUJA-------------------------------------------------
  $('#pujar13').click(function(){

  	$pujar13 = $('#pujar13');

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla13 = $('#num_tabla13').val();
    formData.append('num_tabla',num_tabla13);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar13.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE


       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------


//-----------------------------------PUJA-------------------------------------------------
  $('#pujar14').click(function(){

  	$pujar14 = $('#pujar14');

    let formData = new FormData();

    let id_usuario = $('#id_usuario').val();
    formData.append('id_usuario',id_usuario);

    let token = $('#token').val();
    formData.append('token',token);

    let id_sala = $('#id_sala').val();
    formData.append('id_sala',id_sala);

    let num_tabla14 = $('#num_tabla14').val();
    formData.append('num_tabla',num_tabla14);

    if (id_usuario == '') {

     Swal.fire(
      'COMUNICATE CON SOPORTE HAY UN ERROR',
      '',
      'warning'
      )

   }else{

   	$pujar14.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/pujar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //SALDO CORRECTO
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
           title: 'APUESTA REALIZADA'
         })

        }
       //SALDO CORRECTO


        //SALDO INSUFICIENTE
        else if (data==1) {

         Swal.fire(
          'SALDO INSUFICIENTE',
          'NO CUENTA CON SALDO SUFICIENTE PARA APOSTAR (RECARGA)',
          'warning'
          )

       }
       //SALDO INSUFICIENTE


       //SALDO INSUFICIENTE
        else if (data==2) {

         Swal.fire(
          'CARGANDO',
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A PUJAR</b>',
          'info'
          )

       }
       //SALDO INSUFICIENTE


        //SALDO INCORRECTA
        else{

         Swal.fire(
          'ESTA SALA YA FINALIZO',
          '',
          'error'
          )

       }
       //SALDO INCORRECTA

     }
   });
  }
});
//-----------------------------------PUJA-------------------------------------------------


});

