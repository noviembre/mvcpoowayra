
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
                            <h2> Tareas de

                                <?php

                                //mostrando mes anterior
                                $fechaActual = date('Y-m-j');
                                $fechaMesPasado = strtotime ('-1 month', strtotime($fechaActual));
                                $fechaMesPasadoDate = date('F', $fechaMesPasado);
                                echo $fechaMesPasadoDate;
                                ?>
                            </h2>
                        </div>
                        <div class=" pull-right">
                            <a href="tareasAdd"><input type="button" value="Nueva Tarea" class="btn btn-success"></a>
                            <a href="tareasSemanaPasada"><input type="button" value="Semana Pasada" class="btn btn-default"></a>
                            <a href="tareasMes"><input type="button" value="Mes" class="btn btn-default"></a>
                            <a href="tareasMesAnterior"><input type="button" value="Mes Anterior" class="btn btn-default"></a>
                        </div>
                    </div>

                    <!-- panel-body -->
                    <div class="box-body" >
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Accion</th>
                                <th>Detalles</th>
                                <th>Inicio</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $ver = new GestorTareas();
                            $ver ->listarTareasMesAnteriorController();


                            ?>

                            </tbody>


                        </table>
                    </div> <!--panel-body -->

                </div> <!-- /.box -->
            </div> <!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->