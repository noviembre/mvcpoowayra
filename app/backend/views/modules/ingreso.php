<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Backend | Ingreso</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="views/public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="views/public/css/font-awesome.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="views/public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="views/public/css/blue.css">


</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../index"><b>Portada</b></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Ingrese sus datos de Acceso</p>
        <form style="padding: 10px 0" method="post" id="formIngreso" onsubmit="return validarIngreso()">

            <h1 id="tituloFormIngreso">PANEL DE CONTROL</h1>

            <input class="form-control formIngreso" type="text" placeholder="Ingrese su Usuario" name="usuarioIngreso" id="usuarioIngreso">
            <input class="form-control formIngreso" type="password" placeholder="Ingrese su Contraseña" name="passwordIngreso" id="passwordIngreso">

            <?php

            $ingreso = new Ingreso();
            $ingreso -> ingresoController();

            ?>

            <input class="form-control formIngreso btn btn-primary" type="submit" value="Enviar">

        </form>


        <a href="#">Olvidé mi password</a><br>


    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery -->
<script src="views/public/js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="views/public/js/bootstrap.min.js"></script>
<!-- Bootbox -->
<script src="views/public/js/bootbox.min.js"></script>



</body>
</html>
