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
        <section class="content">
            <div class="row">
                <div class="col-xs-12">


                    <div class="box">
                        <div class="box-header with-border">
                            <div class="box-header with-border">

                                <div class="pull-left">
                                    <h2> Todos los Tours en Ingles</h2>
                                </div>
                                <div class=" pull-right">
                                    <a href="<?php echo URLROOT; ?>/tures/spanish">
                                        <input type="button" value="Español" class="btn btn-warning"></a>

                                    <a href="<?php echo URLROOT; ?>/tures">
                                        <input type="button" value="Todos" class="btn btn-default"></a>
                                    <a href="<?php echo URLROOT; ?>/tures/published">
                                        <input type="button" value="Publicados" class="btn btn-default"></a>

                                    <a href="<?php echo URLROOT; ?>/tures/add">
                                        <input type="button" value="Agregar" class="btn btn-success"></a>

                                </div>
                            </div>
                        </div>


                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>?</th>
                                    <th>Tour</th>
                                    <th>Duracion</th>
                                    <th>Soles</th>
                                    <th>Dolares</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach($data['tours'] as $tour) : ?>
                                    <tr>

                                        <td><?php
                                            if($tour->lang =='es'){
                                                echo '<small class="label label-warning">
                                                <i class="fa fa-flag" title="Spanish"></i>
                                                </small>';
                                            }else {
                                                echo '<small class="label label-primary">
                                                <i class="fa fa-flag" title="English"></i> 
                                                </small>';
                                            }

                                            ?></td>
                                        <td><?php echo $tour->titulo; ?></td>
                                        <td><?php echo $tour->duracion; ?></td>
                                        <td><?php echo $tour->dolares; ?></td>
                                        <td><?php echo $tour->soles; ?></td>
                                        <td><a href="<?php echo URLROOT; ?>/tures/edit/<?php echo $tour->tid; ?>" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i></a>
                                            <a href="<?php echo URLROOT; ?>/tures" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i></a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>?</th>
                                    <th>Tour</th>
                                    <th>Duracion</th>
                                    <th>Soles</th>
                                    <th>Dolares</th>
                                    <th>Acciones</th>
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