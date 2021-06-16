<?php

session_start();
if (@!$_SESSION['usuario']) {
    header("Location:desconectar");
}elseif ($_SESSION['rol']==2) {
    header("Location:desconectar");
}

?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LATIN CLUB</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.jpeg">
    <link href="css/style.css" rel="stylesheet">
    
</head>


<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">500</h1>
                        <h4><i class="fa fa-thumbs-down text-danger"></i> Solicitud incorrecta</h4>
                        <p>Su solicitud resultó en un error</p>
						<div>
                            <a class="btn btn-primary" href="index">Volver al inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<!--*****Scripts*****-->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>
<!--*****Scripts*****-->

</html>