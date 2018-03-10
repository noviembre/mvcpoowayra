
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
                        <div class="box-header with-border">

                            <div class="pull-left">
                                <h2> Listado de Tours que se estan Editando</h2>
                            </div>
                            <div class=" pull-right">
                                <a href="tourspublished"><input type="button" value="Publicados" class="btn btn-default"></a>
                                <a href="toursEditing"><input type="button" value="Editando" class="btn btn-default"></a>
                                <a href="tours"><input type="button" value="Todos" class="btn btn-default"></a>
                                <a href="toursAdd"><input type="button" value="Agregar" class="btn btn-success"></a>

                            </div>
                        </div>
                    </div>

                    <!-- panel-body -->
                    <div class="box-body" >
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Duracion</th>
                                <th>Soles</th>
                                <th>Dolares</th>
                                <th>Acciones</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            $ListaTours = new GestorTours();
                            $ListaTours -> list_Editing_toursController();
                            $ListaTours ->TareaEditarTourController();

                            ?>

                            </tbody>


                        </table>
                    </div> <!--panel-body -->

                </div> <!-- /.box -->
            </div> <!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->

