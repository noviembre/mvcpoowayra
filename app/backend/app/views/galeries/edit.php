<?php require APPROOT . '/views/inc/cabecera.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">

<!-- ./wrapper starts -->
<div class="wrapper">

    <?php require APPROOT . '/views/inc/header.php'; ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php require APPROOT . '/views/inc/panelizquierdo.php'; ?>






    <!-- Main Content Wrapper starts  -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Wayra Cusco World

            </h1>
            <ol class="breadcrumb">

                <li><a href="<?php echo URLROOT; ?>/tours/spanish">
                        <i class="fa fa-flag-o"></i> Español</a></li>
                <li><a href="<?php echo URLROOT; ?>/tours/english">
                        <i class="fa fa-flag"></i> Ingles</a></li>

                <li><a href="<?php echo URLROOT; ?>/tours">
                        <i class="fa fa-picture-o"></i>Tours</a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">

                        <b>Nombre de la Imagen: </b>
                        <?php echo $data['galeria']->gtitulo; ?><br>
                        <b>Pertenece al tour: </b>
                        <?php echo $data['galeria']->titulo; ?>

                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->



            <form action="<?php echo URLROOT; ?>/galeries/edit/<?php echo $data['galeria']->gid; ?>" method="post">

            <!--     first row  starts-->
            <div class="row invoice-info">

                <div class="col-sm-4 invoice-col">
                    <b>Elegir Imagen:</b><br>
                    <select name="gruta"  onchange="document.getElementById('Code').src = this.value"id="" class="form-control" required>
                        <?php foreach($data['url'] as $galUrl) : ?>
                            <option value="../../../../<?php echo $galUrl->gruta; ?>">
                                <?php echo $galUrl->gtitulo; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-sm-4 invoice-col">
                    <address>
                        <strong>Titulo de la Imagen:</strong><br>
                        <input name="gtitulo" value=" <?php echo $data['galeria']->gtitulo; ?> " type="inputName" class="form-control" required>
                    </address>
                </div>


                <!-- /.col -->

                <div class="col-sm-4 invoice-col">

                    <b>Tour id:</b><br>
                    <select name="tid" id="" class="form-control" style="width: 100%;">

                        <?php foreach($data['tourNombre'] as $tour) : ?>

                            <option value="<?php echo $tour->tid; ?>">
                                <?php echo $tour->titulo; ?>
                            </option>
                        <?php endforeach; ?>

                    </select>

                </div>


                <!-- /.col -->
            </div>
            <!-- first row  ends-->


                <!--     second row  starts-->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        <address>
                            <b>Imagen:</b><br>
                            <img id="Code" src="../../../../<?php echo $data['galeria']->gruta; ?>" alt="" class="img-responsive img-rounded" >
                        </address>
                    </div>


                    <!-- /.col -->
                </div>
                <!-- second row  ends-->













            <div class="row">

                <div class="col-xs-12">

                    <button type="submit" class="btn btn-success pull-right" >
                        <i class="fa fa-save"></i> Actualizar
                    </button>
                    <a href="<?php echo URLROOT; ?>/galeries">
                        <input type="text" value="Cancelar" class="btn btn-default pull-right" >
                    </a>


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





    <?php require APPROOT . '/views/inc/pie.php'; ?>
