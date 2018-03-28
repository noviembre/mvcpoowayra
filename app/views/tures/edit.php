<?php require APPROOT . '/views/inc/admin_cabecera_editar.php'; ?>

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

        <form action="<?php echo URLROOT; ?>/tures/edit/<?php echo $data['tid']; ?>" method="post">
        <section class="content-header">
            <h1>
                &nbsp;
                <a href="<?php echo URLROOT; ?>/tures/spanish">
                    <span class="fa fa-arrow-left btn btn-default btn-sm"></span>
                </a>
                <button type="submit" class="btn btn-success" >
                    <i class="fa fa-save"></i> Actualizar
                </button>

            </h1>
            <ol class="breadcrumb">

                <li><a href="<?php echo URLROOT; ?>/tures/spanish">
                        <i class="fa fa-flag-o"></i> Español</a></li>
                <li><a href="<?php echo URLROOT; ?>/tures/english">
                        <i class="fa fa-flag"></i> Ingles</a></li>

                <li><a href="<?php echo URLROOT; ?>/tures">
                        <i class="fa fa-picture-o"></i>Tours</a></li>

                <li><a href="<?php echo URLROOT; ?>/tures/published">
                        <i class="fa fa-check"></i> Publicados</a></li>

                <li><a href="<?php echo URLROOT; ?>/tures/editing">
                        <i class="fa fa-pencil"></i> Editando</a></li>


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

                        <?php echo $data['titulo']; ?> - <b> <?php echo $data['duracion']; ?></b>

                        <small class="pull-right">


                            <?php
                            if($data['lang'] =='es'){
                                echo '<small class="label label-warning">
                                    <i class="fa fa-flag"></i> Spanish
                                                </small>';
                            }else {
                                echo '<small class="label label-primary">
                                    <i class="fa fa-flag"></i> English
                                                </small>';
                            }

                            ?></small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->





                <!--     first row  starts-->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        <address>
                            <strong>Tour:</strong><br>
                            <input name="etitulo" value="<?php echo $data['titulo']; ?>" type="inputName" class="form-control" id="inputName" required>
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        <address>
                            <strong>Duracion:</strong><br>
                            <input name="eduracion" value="<?php echo $data['duracion']; ?>" type="text" class="form-control" id="inputName" required>
                        </address>
                    </div>
                    <!-- /.col -->

                    <div class="col-sm-4 invoice-col">
                        <b>Etiquetas:</b><br>
                        <input name="eetiquetas" value="<?php echo $data['etiquetas']; ?>" type="text" class="form-control" id="inputName" required>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- first row  ends-->

                <!--     second row  starts-->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        <address>
                            <strong>Dolares:</strong><br>
                            <input name="edolares" value="<?php echo $data['dolares']; ?>" min="1" type="number" class="form-control" id="inputName">
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        <address>
                            <strong>Soles:</strong><br>
                            <input name="esoles" value="<?php echo $data['soles']; ?>" min="1" type="number" class="form-control" id="inputName">
                        </address>
                    </div>
                    <!-- /.col -->

                    <div class="col-sm-4 invoice-col">
                        <b>Estado:</b><br>
                        <select name="eestado" id="" class="form-control" required>

                            <option value="<?php echo $data['estado']; ?>">
                                <?php echo $data['estado']; ?></option>
                            <option value="publicado">Publicar</option>
                            <option value="editando">Editando</option>

                        </select>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- second row  ends-->

                <!--     Description  starts      -->
                <div class="row">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">
                                Descripcion
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                        <textarea name="edescripcion" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            <?php echo $data['descripcion']; ?>
                        </textarea>
                        </div>
                    </div>

                </div>
                <!--     Description  ends      -->



                <!--      simple itinerary starts      -->
                <div class="row">
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title">Itinerario Simple
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                        <textarea id="editor1" name="eisimple" class="form-control">
                          <?php echo $data['itinerario']; ?>
                        </textarea>

                        </div>
                    </div>
                </div>
                <!--      simple itinerary ends      -->




                <!--      full itinerary starts      -->
                <div class="row">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">
                                Itinerario completo
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-primary btn-sm" data-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                        <textarea name="eifull" class="textarea"
                                  style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            <?php echo $data['full_itinerario']; ?>
                        </textarea>
                        </div>
                    </div>

                </div>
                <!--      full itinerary ends      -->




                <!--     incluye  starts      -->
                <div class="row">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">
                                Incluye:
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-success btn-sm" data-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                        <textarea name="eincluye" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            <?php echo $data['incluye']; ?>
                        </textarea>

                        </div>
                    </div>

                </div>
                <!--    incluye   ends      -->

                <!--    No incluye  starts      -->
                <div class="row">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">
                                No Incluye
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-danger btn-sm" data-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                        <textarea name="enoincluye" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            <?php echo $data['noincluye']; ?>
                        </textarea>
                        </div>
                    </div>

                </div>
                <!--   No incluye   ends      -->


                <!--    carry on  starts      -->
                <div class="row">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">
                                Que llevar:
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-warning btn-sm" data-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                        <textarea name="equellevar" class="textarea"style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            <?php echo $data['quellevar']; ?>
                        </textarea>
                        </div>
                    </div>

                </div>
                <!--    carry on   ends      -->


                <div class="row">
                    <!-- accepted Notes column -->
                    <div class="col-xs-9">
                        <p class="lead text-danger">Notas: Alguna Observacion con este Tour?</p>
                        <textarea name="enota" class="textarea"style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" rows="3">
                        <?php echo $data['nota']; ?></textarea>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-3">

                        <button type="submit" class="btn btn-success pull-right" >
                            <i class="fa fa-save"></i> Actualizar
                        </button>
                        <a href="<?php echo URLROOT; ?>/tures">
                            <span class="fa fa-arrow-left btn btn-default pull-right btn-lg"></span>
                        </a>


                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->



        </section>
        </form>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- /.content -->
    </div>
    <!-- Main Content Wrapper ends  -->





    <?php require APPROOT . '/views/inc/admin_pie_editar.php'; ?>
