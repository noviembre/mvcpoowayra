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
                Data Tables

            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo URLROOT; ?>/home">
                        <i class="fa fa-home"></i> Inicio</a></li>
                <li><a href="<?php echo URLROOT; ?>/ATours">
                        <i class="fa fa-picture-o"></i>Tours</a></li>
                <li><a href="<?php echo URLROOT; ?>/ATours/add">
                        <i class="fa fa-plus"></i>Agregar</a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">


                    <div class="box">
                        <div class="box-header with-border">
                            <div class="box-header with-border">

                                <div class="pull-left">
                                    <h2> Listado de Todas Imagenes en Espanol</h2>
                                </div>
                                <div class=" pull-right">
                                    <a href="<?php echo URLROOT; ?>/galeries/tours">
                                        <input type="button" value="Tours" class="btn btn-default"></a>

                                    <a href="<?php echo URLROOT; ?>/galeries">
                                        <input type="button" value="Español" class="btn btn-warning"></a>
                                    <a href="<?php echo URLROOT; ?>/galeries/english">
                                        <input type="button" value="Ingles" class="btn btn-info"></a>
                                    <a href="<?php echo URLROOT; ?>/galeries/add">
                                        <input type="button" value="Agregar" class="btn btn-success"></a>

                                </div>
                            </div>
                        </div>


                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre del Tour</th>
                                    <th>?</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach($data['galeryByTour'] as $gale) : ?>
                                    <tr>

                                        <td><a href="<?php echo URLROOT; ?>/galeries/editTours/<?php echo $gale->tid; ?>">
                                                <img src="<?php echo URLROOT; ?>/<?php echo $gale->gruta; ?>" alt="" class="img-responsive" style="height: 50px" width="70px">
                                            </a></td>

                                        <td>
                                            <?php echo $gale->titulo; ?> -
                                            <?php echo $gale->duracion; ?>
                                        </td>

                                        <td><?php
                                            if($gale->lang =='es'){
                                                echo '<small class="label label-warning">
                                                <i class="fa fa-flag"></i>
                                                </small>';
                                            }else {
                                                echo '<small class="label label-primary">
                                                <i class="fa fa-flag"></i>
                                                </small>';
                                            }

                                            ?>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre del Tour</th>
                                    <th>?</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- Main Content Wrapper ends  -->





    <?php require APPROOT . '/views/inc/admin_pie.php'; ?>
