<?php require APPROOT . '/views/inc/admin_cabecera.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">

<!-- ./wrapper starts -->
<div class="wrapper">

    <?php require APPROOT . '/views/inc/admin_header.php'; ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php require APPROOT . '/views/inc/admin_panel_izquierda.php'; ?>






    <!-- Main Content Wrapper starts  -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Wayra Cusco World
                <small>....</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo URLROOT; ?>/home">
                        <i class="fa fa-home"></i> Inicio</a></li>
                <li><a href="<?php echo URLROOT; ?>/tures">
                        <i class="fa fa-picture-o"></i>Tours</a></li>
                <li><a href="<?php echo URLROOT; ?>/tures/add">
                        <i class="fa fa-plus"></i>Agregar</a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">

                        Crear un nuevo tour

                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->



            <form action="<?php echo URLROOT; ?>/tures/add" method="post">

                <!--     first row  starts-->
                <div class="row invoice-info">
                    <div class="col-sm-3 invoice-col">
                        <address>
                            <strong>Tour:</strong><br>
                            <input name="titulo" type="inputName" class="form-control" id="inputName" required>
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 invoice-col">
                        <address>
                            <strong>Duracion:</strong><br>
                            <input name="duracion" type="text" class="form-control" id="inputName" required>
                        </address>
                    </div>
                    <!-- /.col -->

                    <div class="col-sm-3 invoice-col">
                        <b>Etiquetas:</b><br>
                        <input name="etiquetas" type="text" class="form-control" id="inputName">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 invoice-col">
                        <b>Idioma:</b><br>
                        <select name="idioma" id="" class="form-control" required>
                            <option value="es" selected>Espanol</option>
                            <option value="en">Ingles</option>
                        </select>
                    </div>
                </div>
                <!-- first row  ends-->



                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">

                        <button type="submit" class="btn btn-success pull-right" >
                            Siguiente <i class="fa fa-arrow-right"></i>
                        </button>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </form>


        </section>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- /.content -->
    </div>
    <!-- Main Content Wrapper ends  -->





    <?php require APPROOT . '/views/inc/admin_pie.php'; ?>
