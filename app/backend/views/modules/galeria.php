
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
                            <h2> Lista de Tours </h2>
                        </div>

                    </div>

                    <!-- panel-body -->
                    <div class="box-body" >
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Soles</th>
                                <th>Dolares</th>
                                <th>Estado</th>
                                <th>Completo</th>
                                <th>Acciones</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            $ListaTours = new GestorTours();
                            $ListaTours -> listarToursController();

                            ?>

                            </tbody>


                        </table>
                    </div> <!--panel-body -->

                </div> <!-- /.box -->
            </div> <!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->