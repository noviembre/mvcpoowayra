

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
                            <h2> Agregar Tarea</h2>
                        </div>
                        <div class=" pull-right">
                            <a href="tareas"><input type="button" value="Tareas" class="btn btn-success"></a>
                            <a href="tareasSemanaPasada"><input type="button" value="Semana Pasada" class="btn btn-default"></a>
                            <a href="tareasMes"><input type="button" value="Mes" class="btn btn-default"></a>
                            <a href="tareasMesAnterior"><input type="button" value="Mes Anterior" class="btn btn-default"></a>
                        </div>
                    </div>

                    <div class="panel-body" >
                        <form method="post" enctype="multipart/form-data" class="form-horizontal" role="form" >




                            <div class="form-group">
                                <label class="col-lg-4 control-label">Tabla</label>
                                <div class="col-lg-4">
                                    <select  name="tareaTabla" class="form-control selectpicker" data-live-search="true" required>
                                        <?php
                                        $ver = new GestorTareas();
                                        $ver ->mostrarTablasController();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Modo</label>
                                <div class="col-lg-4">
                                    <select name="tareaModo" class="form-control selectpicker" data-live-search="true" required>
                                        <option value="1" selected>P</option>
                                        <option value="0">S</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-lg-4 control-label">Tipo de Tarea</label>
                                <div class="col-lg-4">
                                    <select name="tareaAccion" class="form-control selectpicker" data-live-search="true" required>
                                        <option value="Agregar" selected>Agregar</option>
                                        <option value="Mejorar">Mejorar</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-lg-4 control-label"></label>
                                <div class="col-lg-4">
                                    <input name="tareaTitulo" type="text" placeholder="Que vas hacer ?" class="form-control" maxlength="60" required>
                                </div>
                            </div>


                             <div class="form-group">
                                <label class="col-lg-4 control-label">Descripcion</label>
                                <div class="col-lg-4">
                                    <textarea name="tareaDetalles" id="" rows="3" placeholder="descripcion de la tarea" class="form-control" required maxlength="200"></textarea>
                                </div>
                            </div>


                             <div class="form-group">
                                <label class="col-lg-4 control-label">Comentario</label>
                                <div class="col-lg-4">
                                    <input name="cmtInicial" type="text" placeholder="Comentario Inicial, o primera impresion" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-4 col-lg-9">
                                    <a  href="tareas">
                                        <input type="button" class="btn btn-default" value="Cancelar"></a>
                                    <input type="submit" value="Guardar" class="btn btn-primary">
                                </div>
                            </div>


                        </form>
                        <?php
                        $ver = new GestorTareas();
                        $ver ->guardarTareaController();
                        ?>

                    </div> <!--panel-body -->

                </div> <!-- /.box -->
            </div> <!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->