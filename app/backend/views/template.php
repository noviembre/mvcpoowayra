<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Backend <?php include 'modules/nombrepagina.php'; ?></title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- ok- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="views/public/css/bootstrap.min.css">
    <!-- ok - Font Awesome -->
    <link rel="stylesheet" href="views/public/css/font-awesome.min.css">
    <!-- ok - Ionicons -->
    <link rel="stylesheet" href="views/public/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="views/public/css/dataTables.bootstrap.min.css">
    <!-- ok - Theme style -->
    <link rel="stylesheet" href="views/public/css/AdminLTE.min.css">
    <!-- ok - my style -->
    <link rel="stylesheet" href="views/public/css/style.css">
    <!-- ok - AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="views/public/css/skins/_all-skins.min.css">
    <!-- ok - Select2 -->
    <link rel="stylesheet" href="views/public/css/select2.min.css">

    <!-- ok - sweetalert -->
    <link rel="stylesheet" href="views/public/css/sweetalert.css">

    <script src="views/public/js/sweetalert.min.js"></script>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

		<!--=====================================
		COLUMNA CONTENIDO        
		======================================-->	
			
		<?php

			$modulos = new Enlaces();
			$modulos -> enlacesController();
		
		?>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <!-- page meta -->

                 <?php
                 switch (date("l")){
                     case "Monday":
                         $dia = "Lunes";
                         break;
                     case "Tuesday":
                         $dia = "Martes";
                         break;
                     case "Wednesday":
                         $dia = "Miercoles";
                         break;
                     case "Thursday":
                         $dia = "Jueves";
                         break;
                     case "Friday":
                         $dia = "Viernes";
                         break;
                     case "Saturday":
                         $dia = "Sabado";
                         break;
                     case "Sunday":
                         $dia = "Domingo";
                         break;
                 }

                 switch (date("F")){
                     case "January":
                         $mes = "Enero";
                         break;
                     case "February":
                         $mes = "Febrero";
                         break;
                     case "March":
                         $mes = "Marzo";
                         break;
                     case "April":
                         $mes = "Abril";
                         break;
                     case "May":
                         $mes = "Mayo";
                         break;
                     case "June":
                         $mes = "Junio";
                         break;
                     case "July":
                         $mes = "Julio";
                         break;
                     case "August":
                         $mes = "Agosto";
                         break;
                     case "September":
                         $mes = "Septiembre";
                         break;
                     case "October":
                         $mes = "Octubre";
                         break;
                     case "November":
                         $mes = "Noviembre";
                         break;
                     case "December":
                         $mes = "Diciembre";
                         break;

                 }
                 echo $dia.", ".date("d")." de ".$mes." de ".date("Y");

                 ?>
                <b>- Version</b> 5.08
            </div>

            <strong>Copyright &copy; 2018 <a href="#">Wayra Cusco World</a>.</strong> All rights reserved.



            </footer>


<!--    <script src="views/sj/validarIngreso.js"></script>-->
<!---->
<!--    <script src="views/sj/gestorSlide.js"></script>-->
<!---->
<!--    <script src="views/sj/gestorTours.js"></script>-->
<!--    <script src="views/sj/gestorTareas.js"></script>-->


    <!-- ok - jQuery -->
    <script src="views/public/js/jquery.min.js"></script>
    <!-- ok - Bootstrap 3.3.5 -->
    <script src="views/public/js/bootstrap.min.js"></script>
    <!-- ok - Select2 -->
    <script src="views/public/js/select2.full.min.js"></script>

    <!-- ok - DataTables -->
    <script src="views/public/js/jquery.dataTables.min.js"></script>
    <script src="views/public/js/dataTables.bootstrap.min.js"></script>

    <!-- ok - FastClick -->
    <script src="views/public/js/fastclick.js"></script>
    <!-- ok -  AdminLTE App   -->
    <script src="views/public/js/adminlte.min.js"></script>


    <!-- Page script -->
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2();

        })
    </script>


    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>

    <script src="views/sj/gestorPerfil.js"></script>
</div>
</body>
</html>