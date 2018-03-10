
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

                        <div class=" text-center">
                            <h2> Detalles del tour</h2>
                        </div>
                    </div>

                    <!-- panel-body -->
                    <div class="panel-body"

                        <!-- Form starts.  -->
                        <form method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

                            <?php
                            $displayTemptour = new GestorTours();
                            $displayTemptour ->list_new_temp_TourController();

                            ?>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Dolares</label>
                                <div class="col-lg-8">
                                    <input name="dolaresTour" type="number" class="form-control" min="1" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Soles</label>
                                <div class="col-lg-8">
                                    <input  name="solesTour" type="number" class="form-control" min="1" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-lg-4 control-label">Descripcion:</label>
                                <div class="col-lg-8">
                                    <textarea name="descripcionTour" id="" cols="30" rows="5" placeholder="Breve descripcion del Tour" class="form-control" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Incluye:</label>
                                <div class="col-lg-8">
                                    <textarea name="incluyeTour" id="" cols="30" rows="5" placeholder="Cosas que SI incluye el tour" class="form-control" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">No Incluye:</label>
                                <div class="col-lg-8">
                                    <textarea name="noincluyeTour" id="" cols="30" rows="5" placeholder="Cosas que NO incluye el tour" class="form-control" required></textarea>
                                </div>
                            </div>





                            <hr />
                            <div class="form-group">
                                <div class="col-lg-offset-5 col-lg-9">
                                    <input type="submit" value="Guardar" class="btn btn-primary">

                                </div>
                            </div>
                        </form>
                        <?php
                        $guardarDetalles = new GestorTours();
                        $guardarDetalles ->save_new_details_TourController();

                        ?>

                    </div> <!--panel-body -->

                </div> <!-- /.box -->
            </div> <!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->
