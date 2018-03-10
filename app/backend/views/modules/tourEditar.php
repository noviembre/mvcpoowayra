
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
                                <h2> Editar Tour</h2>
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
                        <form method="post">
                            <?php

                            $ListaTours = new GestorTours();
                            $ListaTours -> list_edit_tourController();
                            $ListaTours -> update_edit_tourController();

                            ?>
                        </form>
                    </div> <!--panel-body -->

                </div> <!-- /.box -->
            </div> <!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->

