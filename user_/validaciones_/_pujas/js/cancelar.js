$(document).ready(function(){

//-----------------------------------PUJA-------------------------------------------------
  $('#cancelar1').click(function(){

  	$cancelar1 = $('#cancelar1');

    $cancelar1.prop('disabled', true);

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

   	$cancelar1.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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
  $('#cancelar2').click(function(){

  	$cancelar2 = $('#cancelar2');

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

   	$cancelar2.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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
  $('#cancelar3').click(function(){

  	$cancelar3 = $('#cancelar3');

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

   	$cancelar3.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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
  $('#cancelar4').click(function(){

  	$cancelar4 = $('#cancelar4');

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

   	$cancelar4.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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
  $('#cancelar5').click(function(){

  	$cancelar5 = $('#cancelar5');

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

   	$cancelar5.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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
  $('#cancelar6').click(function(){

  	$cancelar6 = $('#cancelar6');

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

   	$cancelar6.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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
  $('#cancelar7').click(function(){

  	$cancelar7 = $('#cancelar7');

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

   	$cancelar7.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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
  $('#cancelar8').click(function(){

  	$cancelar8 = $('#cancelar8');

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

   	$cancelar8.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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
  $('#cancelar9').click(function(){

  	$cancelar9 = $('#cancelar9');

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

   	$cancelar9.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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
  $('#cancelar10').click(function(){

  	$cancelar10 = $('#cancelar10');

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

   	$cancelar10.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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
  $('#cancelar11').click(function(){

  	$cancelar11 = $('#cancelar11');

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

   	$cancelar11.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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
  $('#cancelar12').click(function(){

  	$cancelar12 = $('#cancelar12');

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

   	$cancelar12.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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
  $('#cancelar13').click(function(){

  	$cancelar13 = $('#cancelar13');

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

   	$cancelar13.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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
  $('#cancelar14').click(function(){

  	$cancelar14 = $('#cancelar14');

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

   	$cancelar14.prop('disabled', true);

    $.ajax({
      url: 'validaciones_/_pujas/cancelar',
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
           title: 'CANCELADO'
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
          '<b>DEBES ESPERAR 30 SEGUNDOS PARA VOLVER A cancelar</b>',
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

