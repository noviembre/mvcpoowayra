
<?php

session_start();

if(!$_SESSION["validar"]){

    header("location:ingreso");

    exit();

}
include "views/modules/navbar.php";
include "views/modules/sidebar.php";
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header with-border">

                        <div class="pull-left">
                            <h2> Agregar un Nuevo Tour</h2>
                        </div>
                        <div class=" pull-right">
                            <a href="tours"><input type="button" value="Regresar" class="btn btn-success"></a>

                        </div>
                    </div>

                    <!-- panel-body -->
                    <div class="panel-body" >
                        <!-- Form starts.  -->
                        <form method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Tour:</label>
                                <div class="col-lg-4">
                                    <input name="tituloTour" type="text" placeholder="Nombre del tour" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Duracion:</label>
                                <div class="col-lg-4">
                                    <input name="duracionTour" type="text" placeholder="Full Day, 4 dias 3 Noches" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Etiquetas:</label>
                                <div class="col-lg-4">
                                    <input name="etiquetasTour" type="text" placeholder="Etiquetas" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Enlace:</label>
                                <div class="col-lg-4">
                                    <input title="sin espacios. usar guiones" name="enlaceTour" type="text" placeholder="tour-cusco-full-day" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Idioma</label>
                                <div class="col-lg-4">
                                    <select name="idiomaTour" class="form-control">
                                        <option value="">Seleccionar</option>
                                        <option value="en">Ingles</option>
                                        <option value="es">Español</option>
                                    </select>
                                </div>
                            </div>



                            <hr />
                            <div class="form-group">
                                <div class="col-lg-offset-4 col-lg-9">

                                    <input type="submit" value="Cancelar" class="btn btn-default">
                                    <input type="submit" id="guardarArticulo" value="Guardar" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                        <?php
                        $guardarTour = new GestorTours();
                        $guardarTour ->save_new_TourController();
                        ?>
                    </div> <!--panel-body -->

                </div> <!-- /.box -->
            </div> <!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->