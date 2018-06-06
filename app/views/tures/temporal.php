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
        <section class="content-header">
            <h1>
                Wayra Cusco World <i class="fa fa-globe"></i>
                <small>  <?php flash('post_message'); ?></small>
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
                        <?php echo $data['titulo']; ?> <?php echo $data['duracion']; ?>
                        <small class="pull-right">
                        </small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->



            <form action="<?php echo URLROOT; ?>/tures/temporal/<?php echo $data['ramdon']; ?>" method="post">



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
                        <textarea name="tdescripcion" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

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
                        <textarea name="tisimple" id="editor1" rows="10" cols="80">

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
                        <textarea name="tifull" class="textarea"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

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
                        <textarea name="tincluye" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

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
                        <textarea name="tnoincluye" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

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
                        <textarea name="tquellevar" class="textarea"style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                        </textarea>
                        </div>
                    </div>

                </div>
                <!--    carry on   ends      -->


                <div class="row">
                    <!-- accepted Notes column -->
                    <div class="col-xs-6">
                        <p class="lead">Notas:</p>
                        <textarea name="tnota" class="form-control"  placeholder="Notas Acerca del tour" rows="4">
                       </textarea>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-success pull-right" >
                            <i class="fa fa-save"></i> Guardar
                        </button>
                        <button type="button" class="btn btn-default pull-right" style="margin-right: 5px;">
                            <i class="fa fa-times-circle"></i> Cancelar
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





    <?php require APPROOT . '/views/inc/admin_pie_editar.php'; ?>
